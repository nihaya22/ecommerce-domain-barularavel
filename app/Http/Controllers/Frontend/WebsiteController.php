<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.pages.website');
    }
}
