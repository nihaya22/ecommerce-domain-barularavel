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
use App\Http\Controllers\Admin\DomainExtensionController;


// ================= PUBLIC / FRONTEND =================

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/domain', [FrontDomainController::class, 'index'])->name('domain.index');
Route::get('/domain/{slug}', [FrontDomainController::class, 'show'])->name('domain.show');

Route::get('/hosting', [HostingController::class, 'index'])->name('hosting.index');
Route::get('/website', [WebsiteController::class, 'index'])->name('website.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/service/{slug}', [ServiceOrderController::class, 'show'])->name('service.show');
Route::post('/service/{slug}', [ServiceOrderController::class, 'store'])->name('service.store');

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::get('/domain-list', [DomainController::class, 'list'])->name('domain.list');


// ================= ADMIN AUTH =================

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');


// ================= ADMIN PANEL =================

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ================= DOMAIN EXTENSIONS =================
    Route::resource('domains', DomainExtensionController::class);
    Route::resource('domain-extensions', DomainExtensionController::class);

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
    // ⚠️ mark-all-read HARUS di atas {inquiry} supaya tidak dianggap ID
    Route::get('inquiries/mark-all-read', [InquiryController::class, 'markAllRead'])->name('inquiries.markAllRead');

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