<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    // Tampilkan form order berdasarkan slug service
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.service.service-order', compact('service'));
    }

    // Simpan ke DB inquiry + kirim data ke session untuk mailto
    public function store(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Simpan ke tabel inquiries
        Inquiry::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => 'Permintaan Layanan: ' . $service->name,
            'message' => $request->message,
            'status'  => 'New',
        ]);

        // Simpan data ke session supaya view bisa buka mailto otomatis
        return redirect()
            ->route('service.show', $slug)
            ->with('success', 'Permintaan berhasil dikirim! Kami akan segera menghubungi Anda.')
            ->with('inquiry_name',    $request->name)
            ->with('inquiry_email',   $request->email)
            ->with('inquiry_phone',   $request->phone ?? '')
            ->with('inquiry_message', $request->message);
    }
}