<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Site\FaqController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\StaffController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::controller(PageController::class)->group(function () {
    Route::get('/about-us', 'aboutUs')->name('about-us');
});
Route::controller(ServiceController::class)->prefix('services')->group(function () {
    Route::get('/', 'index')->name('services');
    Route::get('/service-one', 'detail')->name('service-detail');
});
Route::controller(StaffController::class)->prefix('staffs')->group(function () {
    Route::get('/', 'index')->name('staffs');
    Route::get('/hari-hari', 'detail')->name('staff-detail');
});
