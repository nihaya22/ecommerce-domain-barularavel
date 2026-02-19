<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


// ================= IMPORT CONTROLLERS =================

// FRONTEND
use App\Http\Controllers\Frontend\DomainController as FrontDomainController;

//FRONTEND SERVICE
Route::get('/service/memperbaiki', function () {
    return view('frontend.pages.service-form', [
        'service_name' => 'Memperbaiki Semua Website'
    ]);
});

Route::get('/service/menambah', function () {
    return view('frontend.pages.service-form', [
        'service_name' => 'Menambah Fitur Website'
    ]);
});

Route::get('/service/mengecek', function () {
    return view('frontend.pages.service-form', [
        'service_name' => 'Mengecek & Audit Website'
    ]);
});





// ADMIN
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\TestimonialController;


// ================= PUBLIC / FRONTEND =================

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Domain list & detail (FRONTEND)
Route::get('/domain', [FrontDomainController::class, 'index'])->name('domain.index');
Route::get('/domain/{slug}', [FrontDomainController::class, 'show'])->name('domain.show');

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');


// ================= ADMIN AUTH =================

// Admin login
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// ================= ADMIN PANEL =================

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    // TARUH DI SINI
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // routes lainnya...


    // ================= DOMAINS (CRUD MANUAL) =================

    // List domains
    Route::get('domains', [DomainController::class, 'index'])->name('domains');

    // Form tambah
    Route::get('domains/create', [DomainController::class, 'create'])->name('domains.create');

    // Simpan
    Route::post('domains', [DomainController::class, 'store'])->name('domains.store');

    // Form edit
    Route::get('domains/{domain}/edit', [DomainController::class, 'edit'])->name('domains.edit');

    // Update
    Route::put('domains/{domain}', [DomainController::class, 'update'])->name('domains.update');

    // Hapus
    Route::delete('domains/{domain}', [DomainController::class, 'destroy'])->name('domains.destroy');


    // ================= SERVICES (CRUD) =================

// list
Route::get('services', [ServiceController::class, 'index'])->name('services');

// form tambah
Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');

// simpan
Route::post('services', [ServiceController::class, 'store'])->name('services.store');

// form edit
Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');

// update
Route::put('services/{service}', [ServiceController::class, 'update'])->name('services.update');

// hapus
Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');


    // ================= INQUIRIES =================
    Route::get('inquiries', [InquiryController::class, 'index'])->name('inquiries');

    // ================= TESTIMONIALS =================

// list
Route::get('testimonials', [TestimonialController::class, 'index'])
    ->name('testimonials');

// form tambah
Route::get('testimonials/create', [TestimonialController::class, 'create'])
    ->name('testimonials.create');

// simpan
Route::post('testimonials', [TestimonialController::class, 'store'])
    ->name('testimonials.store');

// form edit
Route::get('testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])
    ->name('testimonials.edit');

// update
Route::put('testimonials/{testimonial}', [TestimonialController::class, 'update'])
    ->name('testimonials.update');

// hapus
Route::delete('testimonials/{testimonial}', [TestimonialController::class, 'destroy'])
    ->name('testimonials.destroy');

    //================logout=============================
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


});
