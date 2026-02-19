<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    // =========================
    // HALAMAN LIST INQUIRIES
    // URL: /admin/inquiries
    // VIEW: resources/views/admin/inquiries.blade.php
    // =========================
    public function index()
    {
        // Data dummy inquiries (sementara, belum dari database)
        $inquiries = [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
                'email' => 'budi@email.com',
                'message' => 'Saya tertarik beli domain tokobuah.com',
                'status' => 'New',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
                'email' => 'siti@email.com',
                'message' => 'Tanya harga jasa web development',
                'status' => 'Replied',
            ],
        ];

        // Kirim data ke view inquiries
        // VIEW: resources/views/admin/pages/inquiries.blade.php

        return view('admin.pages.inquiries', compact('inquiries'));

    }
}
