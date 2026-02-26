<?php

namespace App\Providers;

use App\Models\Inquiry;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Inject notifikasi ke semua view admin — tanpa file Composer terpisah
        View::composer('admin.*', function ($view) {
            $unreadInquiries = Inquiry::where('status', 'New')->latest()->take(5)->get();
            $unreadCount     = Inquiry::where('status', 'New')->count();

            $view->with(compact('unreadInquiries', 'unreadCount'));
        });
    }
}