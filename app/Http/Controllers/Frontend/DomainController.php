<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Domain;          
use Illuminate\Http\Request;

class DomainController extends Controller
{
    // halaman list domain publik: /domain
    public function index()
    {
        $domains = Domain::latest()->get();
        return view('frontend.pages.domain', compact('domains'));
    }

    // detail domain pakai slug: /domain/{slug}
    public function show(string $slug)
    
    {
        // data dummy dulu
        $domains = [
            [
                'name' => 'tokobuah.com',
                'slug' => 'tokobuah-com',
                'price' => 5000000,
                'status' => 'Available',
                'description' => 'Domain cocok untuk toko buah online',
            ],
        ];

        $domain = collect($domains)->firstWhere('slug', $slug);

        if (! $domain) {
            abort(404);
        }

        return view('frontend.pages.domain-show', compact('domain'));
    }
}
