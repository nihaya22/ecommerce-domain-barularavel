<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    // ================= LIST =================
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.crud.testimonials.index', compact('testimonials'));
    }

    // ================= CREATE FORM =================
    public function create()
    {
        return view('admin.crud.testimonials.create');
    }

    // ================= STORE =================
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'position' => 'required',
            'message'  => 'required',
            'rating'   => 'required|integer|min:1|max:5',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('testimonials', 'public');
        }

        Testimonial::create([
            'name'     => $request->name,
            'position' => $request->position,
            'message'  => $request->message,
            'rating'   => $request->rating,
            'photo'    => $photoPath,
            'status'   => 'Active',
        ]);

        return redirect()->route('admin.testimonials')
                         ->with('success', 'Testimonial berhasil ditambahkan!');
    }

    // ================= EDIT FORM =================
    public function edit(Testimonial $testimonial)
    {
        return view('admin.crud.testimonials.edit', compact('testimonial'));
    }

    // ================= UPDATE =================
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'     => 'required',
            'position' => 'required',
            'message'  => 'required',
            'rating'   => 'required|integer|min:1|max:5',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoPath = $testimonial->photo; // Simpan foto lama

        if ($request->hasFile('photo')) {
            // Hapus foto lama dari storage jika ada
            if ($testimonial->photo) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            $photoPath = $request->file('photo')->store('testimonials', 'public');
        }

        // BUG FIX: Sebelumnya memanggil create() — sekarang update() yang benar
        $testimonial->update([
            'name'     => $request->name,
            'position' => $request->position,
            'message'  => $request->message,
            'rating'   => $request->rating,
            'photo'    => $photoPath,
            'status'   => $request->status ?? $testimonial->status,
        ]);

        return redirect()->route('admin.testimonials')
                         ->with('success', 'Testimonial berhasil diupdate!');
    }

    // ================= DELETE =================
    public function destroy(Testimonial $testimonial)
    {
        // Hapus foto dari storage jika ada
        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }

        $testimonial->delete();

        return back()->with('success', 'Testimonial berhasil dihapus 🗑️');
    }
}
