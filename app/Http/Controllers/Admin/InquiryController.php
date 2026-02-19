<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    // =========================
    // HALAMAN LIST INQUIRIES
    // URL: /admin/inquiries
    // VIEW: resources/views/admin/pages/inquiries.blade.php
    // =========================

    // BUG FIX #5: Sebelumnya pakai dummy data hardcoded
    // Sekarang membaca dari database
    public function index()
    {
        $inquiries = Inquiry::latest()->get();

        return view('admin.pages.inquiries', compact('inquiries'));
    }

    // Detail inquiry
    public function show(Inquiry $inquiry)
    {
        // Tandai sebagai sudah dibaca jika masih "New"
        if ($inquiry->status === 'New') {
            $inquiry->update(['status' => 'Read']);
        }

        return view('admin.pages.inquiry-show', compact('inquiry'));
    }

    // Update status inquiry (New / Read / Replied)
    public function updateStatus(Request $request, Inquiry $inquiry)
    {
        $request->validate([
            'status' => 'required|in:New,Read,Replied',
        ]);

        $inquiry->update(['status' => $request->status]);

        return back()->with('success', 'Status inquiry berhasil diupdate!');
    }

    // Hapus inquiry
    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();

        return back()->with('success', 'Inquiry berhasil dihapus 🗑️');
    }
}
