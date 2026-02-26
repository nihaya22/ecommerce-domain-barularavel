<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DomainController extends Controller
{
    public function index()
    {
        $domains = Domain::latest()->paginate(15);
        return view('admin.crud.domains.index', compact('domains'));
    }

    public function create()
    {
        return view('admin.crud.domains.create');
    }

    private function generateUniqueSlug($fullName)
    {
        // Simpan slug dengan format: nama-ext, misal: tokobuah-com, tokobuah-co-id
        $base = Str::slug($fullName);
        $slug = $base;
        $i = 1;
        while (Domain::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i;
            $i++;
        }
        return $slug;
    }

    public function store(Request $request)
    {
        $request->validate([
            'domain_name' => 'required|string|max:255',
            'domain_ext'  => 'required|string|max:50',
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|in:Available,Sold',
            'description' => 'nullable|string',
        ]);

        $fullName = $request->domain_name . $request->domain_ext;

        Domain::create([
            'name'        => $fullName,
            'slug'        => $this->generateUniqueSlug($fullName),
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()->route('admin.domains')
            ->with('success', 'Domain berhasil ditambahkan!');
    }

    public function edit(Domain $domain)
    {
        return view('admin.crud.domains.edit', compact('domain'));
    }

    public function update(Request $request, Domain $domain)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'status'      => 'required|in:Available,Sold',
            'description' => 'nullable|string',
        ]);

        $domain->update([
            'name'        => $request->name,
            'slug'        => $this->generateUniqueSlug($request->name),
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()->route('admin.domains')
            ->with('success', 'Domain berhasil diperbarui!');
    }

    public function destroy(Domain $domain)
    {
        $domain->delete();
        return redirect()->route('admin.domains')
            ->with('success', 'Domain berhasil dihapus!');
    }
}