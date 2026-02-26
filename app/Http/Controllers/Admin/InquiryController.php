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
    public function index()
    {
        $inquiries = Inquiry::latest()->get();

        return view('admin.pages.inquiries', compact('inquiries'));
    }

    // =========================
    // DETAIL INQUIRY
    // Otomatis tandai 'Read' saat dibuka
    // =========================
    public function show(Inquiry $inquiry)
    {
        if ($inquiry->status === 'New') {
            $inquiry->update(['status' => 'Read']);
        }

        return view('admin.pages.inquiry-show', compact('inquiry'));
    }

    // =========================
    // UPDATE STATUS INQUIRY
    // =========================
    public function updateStatus(Request $request, Inquiry $inquiry)
    {
        $request->validate([
            'status' => 'required|in:New,Read,Replied',
        ]);

        $inquiry->update(['status' => $request->status]);

        return back()->with('success', 'Status inquiry berhasil diupdate!');
    }

    // =========================
    // TANDAI SEMUA DIBACA
    // URL: /admin/inquiries/mark-all-read
    // =========================
    public function markAllRead()
    {
        Inquiry::where('status', 'New')->update(['status' => 'Read']);

        return back()->with('success', 'Semua notifikasi sudah ditandai dibaca ✅');
    }

    // =========================
    // HAPUS INQUIRY
    // =========================
    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();

        return back()->with('success', 'Inquiry berhasil dihapus 🗑️');
    }
}