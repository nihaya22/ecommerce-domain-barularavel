<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DomainController extends Controller
{
    // LIST DOMAINS
    public function index()
    {
        $domains = Domain::latest()->get();
        return view('admin.crud.domains.index', compact('domains'));
    }

    // FORM TAMBAH DOMAIN
    public function create()
    {
        return view('admin.crud.domains.create');
    }

    // SIMPAN DOMAIN BARU
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|unique:domains,name',
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|in:Available,Sold',
            'description' => 'nullable|string',
        ]);

        // BUG FIX #8: Tambahkan slug eksplisit dan validasi uniqueness-nya
        $slug = Str::slug($request->name);

        // Handle duplicate slug dengan append angka
        $originalSlug = $slug;
        $count = 1;
        while (Domain::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        Domain::create([
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.domains')
            ->with('success', 'Domain berhasil ditambahkan!');
    }

    // FORM EDIT DOMAIN
    public function edit(Domain $domain)
    {
        return view('admin.crud.domains.edit', compact('domain'));
    }

    // UPDATE DOMAIN
    public function update(Request $request, Domain $domain)
    {
        $request->validate([
            'name'        => 'required|unique:domains,name,' . $domain->id,
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|in:Available,Sold',
            'description' => 'nullable|string',
        ]);

        // Regenerasi slug hanya jika nama berubah
        $slug = $domain->slug;
        if ($domain->name !== $request->name) {
            $slug = Str::slug($request->name);

            // Handle duplicate slug
            $originalSlug = $slug;
            $count = 1;
            while (Domain::where('slug', $slug)->where('id', '!=', $domain->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
        }

        $domain->update([
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.domains')
            ->with('success', 'Domain berhasil diupdate!');
    }

    // HAPUS DOMAIN
    public function destroy(Domain $domain)
    {
        $domain->delete();

        return redirect()
            ->route('admin.domains')
            ->with('success', 'Domain berhasil dihapus!');
    }
}
