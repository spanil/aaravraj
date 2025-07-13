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
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\PostController;
// Route::get('lang/{locale}', function ($locale) {
//     // session(['locale' => $locale]);
//     // dd('Locale set to: ' . session('locale'));
//     if (in_array($locale, ['en', 'ne'])) {
//         session(['locale' => $locale]);
//         // \Log::debug('Locale saved to session: ' . session('locale'));
//     }
//     return redirect()->back();
// })->name('lang.switch');


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ne'])) {
        session(['locale' => $locale]);
        
        // Debug session immediately after setting
        \Log::debug('Language switched', [
            'requested_locale' => $locale,
            'session_locale' => session('locale'),
            'session_id' => session()->getId()
        ]);
    }
    return redirect()->back();
})->name('lang.switch');

// Route::get('/test-session', function () {
//     session(['test_key' => 'hello']);
//     return redirect('/check-session');
// });

// Route::get('/test-session-set', function () {
//     session(['test' => 'Hello Laravel']);
//     return redirect('/test-session-get');
// });

// Route::get('/test-session-get', function () {
//     return 'Session test: ' . session('test');
// });

// Route::get('/check-session', function () {
//     return session('test_key'); // should return "hello"
// });
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified','setlocale'])->group(function () {
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
    Route::resource('posts', PostController::class)->except(['show']);
    Route::get('/posts/data', [PostController::class, 'getData'])->name('posts.data');
    Route::resource('services', ServiceController::class)->except(['show']); 
    Route::get('/services/data', [ServiceController::class, 'getData'])->name('services.data');   
   
    Route::resource('staffs', StaffController::class)->except(['show']);
    Route::get('/staffs/data', [StaffController::class, 'getData'])->name('staffs.data');
    Route::delete('/staffs/image/{id}', [StaffController::class, 'destroyImage'])->name('staffs.image.destroy');   

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
