<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    // LIST
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.crud.services.index', compact('services'));
    }

    // FORM CREATE
    public function create()
    {
        return view('admin.crud.services.create');
    }

    // SIMPAN
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|unique:services,name',
            'price'  => 'required|numeric|min:0',
            'status' => 'required|in:Active,Inactive',
        ]);

        Service::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.services')
            ->with('success', 'Service berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit(Service $service)
    {
        return view('admin.crud.services.edit', compact('service'));
    }

    // UPDATE
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name'   => 'required|unique:services,name,' . $service->id,
            'price'  => 'required|numeric|min:0',
            'status' => 'required|in:Active,Inactive',
        ]);

        $service->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'price'       => $request->price,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.services')
            ->with('success', 'Service berhasil diupdate');
    }

    // DELETE
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()
            ->route('admin.services')
            ->with('success', 'Service berhasil dihapus');
    }
}
