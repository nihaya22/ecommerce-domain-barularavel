<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Models\DomainExtension;

class DomainController extends Controller
{
    public function index()
    {
        $domains = Domain::available()->latest()->get();
        $extensions = DomainExtension::all();
        return view('frontend.pages.domain.index', compact('domains', 'extensions'));
    }

    public function show($slug)
    {
        $domain = Domain::where('slug', $slug)
            ->where('status', 'Available')
            ->firstOrFail();

        return view('frontend.pages.domain.show', compact('domain'));
    }
}