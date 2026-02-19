@extends('admin.layouts.main')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-extrabold text-slate-900">Edit Domain</h1>
        <p class="text-sm text-slate-600 mt-1">Update data domain.</p>
    </div>

    <a href="{{ route('admin.domains') }}"
       class="px-4 py-2 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition font-semibold text-slate-700">
        ⬅ Kembali
    </a>
</div>

@if($errors->any())
    <div class="mb-4 p-3 rounded-xl bg-red-50 text-red-700 border border-red-200">
        {{ $errors->first() }}
    </div>
@endif

<form action="{{ route('admin.domains.update', $domain) }}" method="POST"
      class="bg-white/90 rounded-2xl border border-brand-100 shadow-soft p-6 space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="text-sm font-semibold text-slate-700">Nama Domain</label>
        <input name="name" value="{{ old('name', $domain->name) }}" required
               class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                      focus:outline-none focus:ring-2 focus:ring-brand-300">
    </div>

    <div>
        <label class="text-sm font-semibold text-slate-700">Deskripsi (opsional)</label>
        <textarea name="description" rows="4"
                  class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                         focus:outline-none focus:ring-2 focus:ring-brand-300">{{ old('description', $domain->description) }}</textarea>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label class="text-sm font-semibold text-slate-700">Harga</label>
            <input type="number" name="price" value="{{ old('price', $domain->price) }}" min="0" required
                   class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                          focus:outline-none focus:ring-2 focus:ring-brand-300">
        </div>

        <div>
            <label class="text-sm font-semibold text-slate-700">Status</label>
            <select name="status"
                    class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                           focus:outline-none focus:ring-2 focus:ring-brand-300">
                <option value="Available" @selected(old('status', $domain->status)==='Available')>Available</option>
                <option value="Sold" @selected(old('status', $domain->status)==='Sold')>Sold</option>
            </select>
        </div>
    </div>

    <div class="flex gap-3 pt-2">
        <a href="{{ route('admin.domains') }}"
           class="px-4 py-2.5 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition font-semibold text-slate-700">
            Batal
        </a>

        <button type="submit"
                class="px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft">
            Update
        </button>
    </div>
</form>
@endsection
