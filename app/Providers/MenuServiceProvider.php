<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (Auth::check()) { // Ensure user is logged in
                $roleId = Auth::user()->role_id;
                $sidebarMenus = Menu::getMenus($roleId);
                $view->with('sidebarMenus', $sidebarMenus);
            }
        });
    }
}
