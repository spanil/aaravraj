<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleMenuPermissionController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\PageController;
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class)->except(['show']); 
    Route::get('/roles/data', [RoleController::class, 'getData'])->name('roles.data'); 
    Route::resource('users', UserController::class)->except(['show']); 
    Route::get('/users/data', [UserController::class, 'getData'])->name('users.data');   
    Route::get('/role_menu_permission', [RoleMenuPermissionController::class, 'index'])->name('roleMenuPermission.index');  
    Route::post('/role_menu_permission/update_permission', [RoleMenuPermissionController::class, 'updatePermission'])->name('updatePermission');
    Route::resource('categories', CategoryController::class)->except(['show']); 
    Route::get('/categories/data', [CategoryController::class, 'getData'])->name('categories.data'); 
    Route::resource('products', ProductController::class)->except(['show']); 
    Route::get('/products/data', [ProductController::class, 'getData'])->name('products.data');  
    Route::get('/general_settings', [GeneralSettingController::class, 'index'])->name('general_settings.index');  
    Route::post('/general_settings', [GeneralSettingController::class, 'store'])->name('general_settings.store');  
    Route::resource('banners', BannerController::class)->except(['show']);
    Route::get('/banners/data', [BannerController::class, 'getData'])->name('banners.data'); 
    Route::resource('pages', PageController::class)->except(['show']);
    Route::get('/pages/data', [PageController::class, 'getData'])->name('pages.data');   

});
Route::get('/email/verify', function () {
    return view('auth.verify-email'); 
})->middleware('auth')->name('verification.notice');

Route::get('/verify-email/{id}', [AuthController::class, 'verifyEmail'])->name('verify.email')->middleware('signed');
Route::post('/password/email', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::post('/password/email', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('/password/reset/{token}', [PasswordResetController::class, 'showResetForm']);
Route::get('/password/reset', [PasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordResetController::class, 'reset'])->name('password.update');
