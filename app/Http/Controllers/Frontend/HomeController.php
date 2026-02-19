<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('status', 'Active')
            ->latest()
            ->take(3)
            ->get();
        return view('frontend.pages.home', compact('testimonials'));

        
        $services = Service::where('status', 'Active')
                ->latest()
                ->take(3)
                ->get();
        
        return view('frontend.pages.home', compact('services'));
    }
}





