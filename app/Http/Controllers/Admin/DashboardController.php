<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Models\Service;
use App\Models\Inquiry;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    // BUG FIX #7: Sebelumnya view menampilkan angka hardcoded
    // Sekarang statistik diambil dari database
    public function index()
    {
        $totalDomains      = Domain::count();
        $totalServices     = Service::count();
        $totalInquiries    = Inquiry::count();
        $totalTestimonials = Testimonial::count();

        $newInquiries = Inquiry::where('status', 'New')->count();

        return view('admin.pages.dashboard', compact(
            'totalDomains',
            'totalServices',
            'totalInquiries',
            'totalTestimonials',
            'newInquiries'
        ));
    }
}
