@extends('admin.layouts.main')

@section('title', 'Tambah Domain')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-extrabold text-slate-900">Tambah Domain</h1>
        <p class="text-sm text-slate-600 mt-1">Masukkan domain baru ke database.</p>
    </div>
    <a href="{{ route('admin.domains') }}"
       class="px-4 py-2 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition font-semibold text-slate-700 text-sm">
        ⬅ Kembali
    </a>
</div>

@if($errors->any())
    <div class="mb-4 p-3 rounded-xl bg-red-50 text-red-700 border border-red-200 text-sm">
        {{ $errors->first() }}
    </div>
@endif

<form action="{{ route('admin.domains.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="text-sm font-semibold text-slate-700">Nama Domain</label>
        <p class="text-xs text-slate-400 mb-2">Ketik nama domain (tanpa ekstensi), lalu pilih ekstensinya.</p>
        <div class="flex gap-2">
            <input name="domain_name" value="{{ old('domain_name') }}"
                   placeholder="contoh: tokobuah"
                   class="flex-1 px-4 py-3 rounded-xl border border-brand-200 bg-white
                          focus:outline-none focus:ring-2 focus:ring-brand-300 text-sm">

            <select name="domain_ext"
                    class="w-48 px-4 py-3 rounded-xl border border-brand-200 bg-white
                           focus:outline-none focus:ring-2 focus:ring-brand-300 text-sm">
                <optgroup label="🌐 Global / gTLD">
                    <option value=".com">.com</option>
                    <option value=".net">.net</option>
                    <option value=".org">.org</option>
                    <option value=".info">.info</option>
                    <option value=".biz">.biz</option>
                    <option value=".online">.online</option>
                    <option value=".site">.site</option>
                    <option value=".website">.website</option>
                    <option value=".app">.app</option>
                    <option value=".tech">.tech</option>
                    <option value=".store">.store</option>
                    <option value=".blog">.blog</option>
                    <option value=".digital">.digital</option>
                    <option value=".cloud">.cloud</option>
                    <option value=".xyz">.xyz</option>
                </optgroup>
                <optgroup label="🏢 Bisnis & Profesional">
                    <option value=".company">.company</option>
                    <option value=".business">.business</option>
                    <option value=".solutions">.solutions</option>
                    <option value=".services">.services</option>
                    <option value=".agency">.agency</option>
                    <option value=".studio">.studio</option>
                    <option value=".consulting">.consulting</option>
                    <option value=".group">.group</option>
                    <option value=".global">.global</option>
                </optgroup>
                <optgroup label="🛒 Toko & E-Commerce">
                    <option value=".shop">.shop</option>
                    <option value=".market">.market</option>
                    <option value=".mart">.mart</option>
                    <option value=".sale">.sale</option>
                    <option value=".deals">.deals</option>
                </optgroup>
                <optgroup label="🇮🇩 Indonesia (ccTLD)">
                    <option value=".id">.id</option>
                    <option value=".co.id">.co.id</option>
                    <option value=".or.id">.or.id</option>
                    <option value=".ac.id">.ac.id</option>
                    <option value=".sch.id">.sch.id</option>
                    <option value=".go.id">.go.id</option>
                    <option value=".desa.id">.desa.id</option>
                    <option value=".my.id">.my.id</option>
                    <option value=".biz.id">.biz.id</option>
                    <option value=".web.id">.web.id</option>
                </optgroup>
                <optgroup label="🌎 Domain Negara">
                    <option value=".us">.us</option>
                    <option value=".uk">.uk</option>
                    <option value=".au">.au</option>
                    <option value=".sg">.sg</option>
                    <option value=".jp">.jp</option>
                    <option value=".my">.my</option>
                    <option value=".de">.de</option>
                    <option value=".fr">.fr</option>
                </optgroup>
            </select>
        </div>
        <div class="mt-2 text-sm text-slate-500">
            Preview: <strong id="domainPreview" class="text-blue-600">tokobuah.com</strong>
        </div>
    </div>

    <div>
        <label class="text-sm font-semibold text-slate-700">Deskripsi (opsional)</label>
        <textarea name="description" rows="3"
                  placeholder="Deskripsi singkat tentang domain ini..."
                  class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                         focus:outline-none focus:ring-2 focus:ring-brand-300 text-sm">{{ old('description') }}</textarea>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label class="text-sm font-semibold text-slate-700">Harga (Rp)</label>
            <input type="number" name="price" value="{{ old('price', 0) }}" min="0" required
                   placeholder="150000"
                   class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                          focus:outline-none focus:ring-2 focus:ring-brand-300 text-sm">
        </div>
        <div>
            <label class="text-sm font-semibold text-slate-700">Status</label>
            <select name="status"
                    class="mt-2 w-full px-4 py-3 rounded-xl border border-brand-200 bg-white
                           focus:outline-none focus:ring-2 focus:ring-brand-300 text-sm">
                <option value="Available">Available</option>
                <option value="Sold">Sold</option>
            </select>
        </div>
    </div>

    <div class="flex gap-3 pt-2">
        <a href="{{ route('admin.domains') }}"
           class="px-4 py-2.5 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition font-semibold text-slate-700 text-sm">
            Batal
        </a>
        <button type="submit"
                class="px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft text-sm">
            💾 Simpan
        </button>
    </div>
</form>

<script>
    const nameInput = document.querySelector('input[name="domain_name"]');
    const extSelect = document.querySelector('select[name="domain_ext"]');
    const preview = document.getElementById('domainPreview');
    function updatePreview() {
        const name = nameInput.value || 'tokobuah';
        const ext = extSelect.value || '.com';
        preview.textContent = name + ext;
    }
    nameInput.addEventListener('input', updatePreview);
    extSelect.addEventListener('change', updatePreview);
    updatePreview();
</script>

@endsection