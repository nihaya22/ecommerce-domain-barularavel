<?php

use Illuminate\Support\Facades\Route;

// ================= IMPORT CONTROLLERS =================

// FRONTEND
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DomainController as FrontDomainController;
use App\Http\Controllers\Frontend\ServiceOrderController;
use App\Http\Controllers\Frontend\HostingController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Frontend\ContactController;

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

// Hosting
Route::get('/hosting', [HostingController::class, 'index'])->name('hosting.index');

// Website
Route::get('/website', [WebsiteController::class, 'index'])->name('website.index');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Service order form & submission (FRONTEND)
// BUG FIX #6: Route ServiceOrderController dengan namespace yang benar
Route::get('/service/{slug}', [ServiceOrderController::class, 'show'])->name('service.show');
Route::post('/service/{slug}', [ServiceOrderController::class, 'store'])->name('service.store');

// Redirect /login ke admin login
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');


// ================= ADMIN AUTH =================

// BUG FIX #6: Hapus logout duplikat — logout hanya ada di dalam group auth
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');


// ================= ADMIN PANEL =================

// BUG FIX #6: Semua route admin dipindahkan ke dalam group middleware('auth') dengan benar
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ================= DOMAINS (CRUD) =================
    Route::get('domains', [DomainController::class, 'index'])->name('domains');
    Route::get('domains/create', [DomainController::class, 'create'])->name('domains.create');
    Route::post('domains', [DomainController::class, 'store'])->name('domains.store');
    Route::get('domains/{domain}/edit', [DomainController::class, 'edit'])->name('domains.edit');
    Route::put('domains/{domain}', [DomainController::class, 'update'])->name('domains.update');
    Route::delete('domains/{domain}', [DomainController::class, 'destroy'])->name('domains.destroy');

    // ================= SERVICES (CRUD) =================
    Route::get('services', [ServiceController::class, 'index'])->name('services');
    Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('services/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // ================= INQUIRIES =================
    Route::get('inquiries', [InquiryController::class, 'index'])->name('inquiries');
    Route::get('inquiries/{inquiry}', [InquiryController::class, 'show'])->name('inquiries.show');
    Route::patch('inquiries/{inquiry}/status', [InquiryController::class, 'updateStatus'])->name('inquiries.updateStatus');
    Route::delete('inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');

    // ================= TESTIMONIALS (CRUD) =================
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');

    // ================= LOGOUT =================
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
});
