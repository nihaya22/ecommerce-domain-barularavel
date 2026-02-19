@extends('admin.layouts.main')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-extrabold text-slate-900">Edit Service</h1>
        <p class="text-sm text-slate-600 mt-1">Ubah data service yang sudah ada.</p>
    </div>

    <a href="{{ route('admin.services') }}"
       class="px-4 py-2 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition font-semibold text-slate-700">
        ⬅ Kembali
    </a>
</div>

@if($errors->any())
    <div class="mb-4 p-3 rounded-xl bg-red-50 text-red-700 border border-red-200">
        {{ $errors->first() }}
    </div>
@endif

@if(session('success'))
    <div class="mb-4 p-3 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-200">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.services.update', $service->id) }}" method="POST"
      class="bg-white/90 rounded-2xl border border-brand-100 shadow-soft p-6 space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="text-sm font-semibold text-slate-700">Nama Service</label>
        <input type="text" name="name" value="{{ old('name', $service->name) }}" required
               class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                      focus:outline-none focus:ring-2 focus:ring-brand-300">
    </div>

    <div>
        <label class="text-sm font-semibold text-slate-700">Harga</label>
        <input type="number" name="price" value="{{ old('price', $service->price) }}" min="0" required
               class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                      focus:outline-none focus:ring-2 focus:ring-brand-300"
               placeholder="Contoh: 300000">
    </div>

    <div>
        <label class="text-sm font-semibold text-slate-700">Deskripsi</label>
        <textarea name="description" rows="4"
                  class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                         focus:outline-none focus:ring-2 focus:ring-brand-300"
                  placeholder="Deskripsi singkat layanan...">{{ old('description', $service->description) }}</textarea>
    </div>

    <div>
        <label class="text-sm font-semibold text-slate-700">Status</label>
        <select name="status"
                class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                       focus:outline-none focus:ring-2 focus:ring-brand-300">
            <option value="Active"   @selected(old('status', $service->status) === 'Active')>Active</option>
            <option value="Inactive" @selected(old('status', $service->status) === 'Inactive')>Inactive</option>
        </select>
    </div>

    <div class="flex gap-3 pt-2">
        <a href="{{ route('admin.services') }}"
           class="px-4 py-2.5 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition font-semibold text-slate-700">
            Batal
        </a>

        <button type="submit"
                class="px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft">
            Simpan Perubahan
        </button>
    </div>
</form>

@endsection
