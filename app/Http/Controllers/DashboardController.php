<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // if (Auth::viaRemember()) {
        //     logger("User {$user->email} was authenticated via remember me.");
        //     return view('dashboard')->with('remembered', true);
        // }

        // logger("User {$user->email} logged in via normal session.");
        // return view('dashboard')->with('remembered', false);
        $remembered = false;
        if (Auth::viaRemember()) {
            $remembered = true;
            $request->session()->flash('remembered', true);
        }

        return view('admin.dashboard', compact('remembered'));
    }
}
