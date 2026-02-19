<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    // Halaman list domain publik: /domain
    public function index()
    {
        $domains = Domain::where('status', 'Available')
            ->latest()
            ->get();

        return view('frontend.pages.domain.index', compact('domains'));
    }

    // BUG FIX #3: Sebelumnya pakai dummy data hardcoded
    // Sekarang membaca langsung dari database berdasarkan slug
    public function show(string $slug)
    {
        $domain = Domain::where('slug', $slug)->firstOrFail();

        return view('frontend.pages.domain.show', compact('domain'));
    }
}
