<?php

// BUG FIX #4: Namespace salah (App\Http\Controllers) dan class name salah (ServiceController)
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    // Tampilkan form pemesanan service berdasarkan slug
    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)
            ->where('status', 'Active')
            ->firstOrFail();

        return view('frontend.pages.service-form', compact('service'));
    }

    // BUG FIX #4: Sebelumnya hanya return back() tanpa simpan ke DB
    // Sekarang benar-benar menyimpan order ke tabel service_orders
    public function store(Request $request, string $slug)
    {
        $service = Service::where('slug', $slug)
            ->where('status', 'Active')
            ->firstOrFail();

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        ServiceOrder::create([
            'service_id' => $service->id,
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'message'    => $request->message,
        ]);

        return back()->with('success', 'Pesanan layanan "' . $service->name . '" berhasil dikirim! Tim kami akan segera menghubungi kamu.');
    }
}