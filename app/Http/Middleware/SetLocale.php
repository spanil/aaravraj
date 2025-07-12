<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    //    $locale = Session::get('locale', config('app.locale'));
    //     App::setLocale($locale);
    //      \Log::debug('Locale middleware called', [
    //     'session_locale' => session('locale'),
    //     'app_locale' => App::getLocale(),
    //     'config_locale' => config('app.locale')
    // ]);
    //     return $next($request);



       if ($request->hasSession()) {
        $locale = $request->session()->get('locale', config('app.locale'));
        
        \Log::debug('Middleware locale setting', [
            'session_exists' => true,
            'session_locale' => $request->session()->get('locale'),
            'session_id' => $request->session()->getId(),
            'using_locale' => $locale
        ]);
    } else {
        $locale = config('app.locale');
        \Log::warning('Session not available in SetLocale middleware');
    }

    App::setLocale($locale);
    return $next($request);
    }
}
