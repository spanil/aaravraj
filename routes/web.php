<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Site\FaqController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\StaffController;
use App\Http\Controllers\Site\PostController;
use App\Http\Controllers\Site\AppointmentController;
use App\Http\Controllers\Site\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
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
Route::controller(PostController::class)->prefix('blogs')->group(function () {
    Route::get('/', 'index')->name('blogs');
    Route::get('/hari-hari', 'detail')->name('blog-detail');
});
