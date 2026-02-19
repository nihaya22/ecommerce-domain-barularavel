<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // BUG FIX #2: Sebelumnya dead code — $services tidak pernah dikirim ke view
        // karena ada return sebelum query $services dieksekusi
        $testimonials = Testimonial::where('status', 'Active')
            ->latest()
            ->take(3)
            ->get();

        $services = Service::where('status', 'Active')
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.pages.home.index', compact('testimonials', 'services'));
    }
}
