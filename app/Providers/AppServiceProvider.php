<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Inquiry;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    View::composer('admin.partials.navbar', function ($view) {
        $newCount = Inquiry::where('status', 'New')->count();
        $latestInquiries = Inquiry::latest()->take(5)->get();

        $view->with([
            'newCount' => $newCount,
            'latestInquiries' => $latestInquiries
        ]);
    });
}

}
