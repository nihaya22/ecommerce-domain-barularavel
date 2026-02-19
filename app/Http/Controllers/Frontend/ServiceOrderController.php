<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
{
    return view('frontend.pages.service-form', [
        'service_name' => ucfirst($slug)
    ]);
}


    public function store(Request $request, $slug)
{
    $request->validate([
        'name'    => 'required',
        'email'   => 'required|email',
        'message' => 'required'
    ]);

    return back()->with('success', 'Permintaan layanan '.$slug.' berhasil dikirim!');
}

}