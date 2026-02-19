<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    // =========================
    // LIST DOMAINS
    // URL: /admin/domains
    // VIEW: resources/views/admin/crud/domains/index.blade.php
    // =========================
    public function index()
    {
        $domains = Domain::latest()->get();
        return view('admin.crud.domains.index', compact('domains'));
    }

    // =========================
    // FORM TAMBAH DOMAIN
    // URL: /admin/domains/create
    // VIEW: resources/views/admin/crud/domains/create.blade.php
    // =========================
    public function create()
    {
        return view('admin.crud.domains.create');
    }

    // =========================
    // SIMPAN DOMAIN BARU
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|unique:domains,name',
            'price'  => 'required|numeric|min:0',
            'status' => 'required|in:Available,Sold',
        ]);

        Domain::create([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.domains')
            ->with('success', 'Domain berhasil ditambahkan');
    }

    // =========================
    // FORM EDIT DOMAIN
    // URL: /admin/domains/{domain}/edit
    // VIEW: resources/views/admin/crud/domains/edit.blade.php
    // =========================
    public function edit(Domain $domain)
    {
        return view('admin.crud.domains.edit', compact('domain'));
    }

    // =========================
    // UPDATE DOMAIN
    // =========================
    public function update(Request $request, Domain $domain)
    {
        $request->validate([
            'name'   => 'required|unique:domains,name,' . $domain->id,
            'price'  => 'required|numeric|min:0',
            'status' => 'required|in:Available,Sold',
        ]);

        $domain->update([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.domains')
            ->with('success', 'Domain berhasil diupdate');
    }

    // =========================
    // HAPUS DOMAIN
    // =========================
    public function destroy(Domain $domain)
    {
        $domain->delete();

        return redirect()
            ->route('admin.domains')
            ->with('success', 'Domain berhasil dihapus');
    }
}
