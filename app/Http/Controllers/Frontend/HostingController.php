<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HostingController extends Controller
{
    public function index()
    {
        return view('frontend.pages.hosting');
    }
}
