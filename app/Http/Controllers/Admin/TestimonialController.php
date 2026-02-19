<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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
        'name' => 'required',
        'position' => 'required',
        'message' => 'required',
        'rating' => 'required|integer|min:1|max:5',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $photoPath = null;

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('testimonials', 'public');
    }

    Testimonial::create([
        'name' => $request->name,
        'position' => $request->position,
        'message' => $request->message,
        'rating' => $request->rating,
        'photo' => $photoPath,
        'status' => 'Active'
    ]);

    return redirect()->route('admin.testimonials')
                    ->with('success', 'Berhasil ditambahkan!');
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
        'name' => 'required',
        'position' => 'required',
        'message' => 'required',
        'rating' => 'required|integer|min:1|max:5',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $photoPath = null;

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('testimonials', 'public');
    }

    Testimonial::create([
        'name' => $request->name,
        'position' => $request->position,
        'message' => $request->message,
        'rating' => $request->rating,
        'photo' => $photoPath,
        'status' => 'Active'
    ]);

    return redirect()->route('admin.testimonials');
}

    // ================= DELETE =================
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return back()->with('success', 'Testimonial dihapus 🗑️');
    }
}
