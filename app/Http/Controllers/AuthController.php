<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Mail::to($request->email)->send(new VerifyEmail($user));
        return redirect()->route('login')->with('success', 'Account created');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            if (!$user->hasVerifiedEmail()) {
            Auth::logout();             
            $request->session()->regenerate();            
            return back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'Please verify your email address before logging in 
                              Check your inbox for the verification link.'
                ])
                ->with('unverified', true);         
            
        }
        $request->session()->regenerate();       
        return redirect()->route('admin.dashboard');
    }

        return back()
        ->withInput($request->only('email', 'remember'))
        ->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function verifyEmail($id)
    {
        $user = User::findOrFail($id);
        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('login')->with('success', 'Email verified.');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $token = Str::random(60);
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['token' => Hash::make($token), 'created_at' => now()]
        );

        $link = url('/password/reset/' . $token . '?email=' . urlencode($request->email));
        Mail::to($request->email)->send(new ResetPasswordMail($link));
        return back()->with('status', 'Reset link sent.');
    }

    public function reset(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'token' => 'required',
        'password' => 'required|confirmed|min:6',
    ]);

    $record = DB::table('password_resets')->where('email', $request->email)->first();

    if (! $record || ! Hash::check($request->token, $record->token)) {
        return back()->withErrors(['token' => 'Invalid token']);
    }

    $user = User::where('email', $request->email)->firstOrFail();
    $user->password = Hash::make($request->password);
    $user->save();

    DB::table('password_resets')->where('email', $request->email)->delete();

    return redirect()->route('login')->with('success', 'Password reset successfully.');
}
}