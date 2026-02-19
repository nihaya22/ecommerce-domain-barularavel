@extends('admin.layouts.main')

@section('content')

{{-- ================= PAGE HEADER ================= --}}
<div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            Dashboard
        </h1>
        <p class="text-sm text-slate-600 mt-1">
            Selamat datang di admin panel ✨ Kelola data dengan cepat dan rapi.
        </p>
    </div>

    <div class="flex gap-2">
        <a href="{{ route('admin.inquiries') }}"
           class="px-4 py-2.5 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition text-slate-700 font-medium">
            Lihat Inquiries
        </a>
        <a href="{{ route('admin.domains') }}"
           class="px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft">
            + Kelola Domains
        </a>
    </div>
</div>

{{-- ================= STATS ================= --}}
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mt-6">

    {{-- Card --}}
    <div class="group bg-white rounded-2xl border border-brand-100 p-5 shadow-soft hover:shadow-md transition">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-700">Total Domains</p>
                <p class="text-3xl font-extrabold text-slate-900 mt-2">24</p>
            </div>
            <div class="h-11 w-11 rounded-2xl bg-brand-50 border border-brand-100 grid place-items-center text-brand-700">
                🌐
            </div>
        </div>
        <div class="mt-4 h-1.5 rounded-full bg-brand-100 overflow-hidden">
            <div class="h-full w-2/3 bg-brand-500 rounded-full"></div>
        </div>
    </div>

    <div class="group bg-white rounded-2xl border border-brand-100 p-5 shadow-soft hover:shadow-md transition">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-700">Total Services</p>
                <p class="text-3xl font-extrabold text-slate-900 mt-2">12</p>
            </div>
            <div class="h-11 w-11 rounded-2xl bg-brand-50 border border-brand-100 grid place-items-center text-brand-700">
                🧩
            </div>
        </div>
        <div class="mt-4 h-1.5 rounded-full bg-brand-100 overflow-hidden">
            <div class="h-full w-1/2 bg-brand-500 rounded-full"></div>
        </div>
    </div>

    <div class="group bg-white rounded-2xl border border-brand-100 p-5 shadow-soft hover:shadow-md transition">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-700">Inquiries</p>
                <p class="text-3xl font-extrabold text-slate-900 mt-2">8</p>
            </div>
            <div class="h-11 w-11 rounded-2xl bg-brand-50 border border-brand-100 grid place-items-center text-brand-700">
                ✉️
            </div>
        </div>
        <div class="mt-4 h-1.5 rounded-full bg-brand-100 overflow-hidden">
            <div class="h-full w-1/3 bg-brand-500 rounded-full"></div>
        </div>
    </div>

    <div class="group bg-white rounded-2xl border border-brand-100 p-5 shadow-soft hover:shadow-md transition">
        <div class="flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-700">Testimonials</p>
                <p class="text-3xl font-extrabold text-slate-900 mt-2">5</p>
            </div>
            <div class="h-11 w-11 rounded-2xl bg-brand-50 border border-brand-100 grid place-items-center text-brand-700">
                ⭐
            </div>
        </div>
        <div class="mt-4 h-1.5 rounded-full bg-brand-100 overflow-hidden">
            <div class="h-full w-1/4 bg-brand-500 rounded-full"></div>
        </div>
    </div>

</div>

{{-- ================= QUICK ACTIONS + WELCOME ================= --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-6">

    {{-- Quick Actions --}}
    <div class="lg:col-span-2 bg-white rounded-2xl border border-brand-100 p-6 shadow-soft">
        <div class="flex items-center justify-between gap-3">
            <div>
                <h2 class="text-lg font-bold text-slate-900">Quick Actions</h2>
                <p class="text-sm text-slate-600 mt-1">Akses cepat untuk mengelola data utama.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-5">
            <a href="{{ route('admin.domains') }}"
               class="p-4 rounded-2xl border border-brand-200 hover:bg-brand-50 transition">
                <div class="font-semibold text-slate-900">Kelola Domains</div>
                <div class="text-sm text-slate-600 mt-1">Tambah, edit, hapus domain.</div>
            </a>

            <a href="{{ route('admin.services') }}"
               class="p-4 rounded-2xl border border-brand-200 hover:bg-brand-50 transition">
                <div class="font-semibold text-slate-900">Kelola Services</div>
                <div class="text-sm text-slate-600 mt-1">Atur layanan & paket.</div>
            </a>

            <a href="{{ route('admin.inquiries') }}"
               class="p-4 rounded-2xl border border-brand-200 hover:bg-brand-50 transition">
                <div class="font-semibold text-slate-900">Cek Inquiries</div>
                <div class="text-sm text-slate-600 mt-1">Lihat pesan masuk.</div>
            </a>

            <a href="{{ route('admin.testimonials') }}"
               class="p-4 rounded-2xl border border-brand-200 hover:bg-brand-50 transition">
                <div class="font-semibold text-slate-900">Kelola Testimonials</div>
                <div class="text-sm text-slate-600 mt-1">Review testimoni pelanggan.</div>
            </a>
        </div>
    </div>

    {{-- Welcome --}}
    <div class="bg-gradient-to-b from-brand-50 to-white rounded-2xl border border-brand-100 p-6 shadow-soft">
        <h2 class="text-lg font-extrabold text-slate-900">
            Selamat datang 👋
        </h2>
        <p class="text-sm text-slate-600 mt-2">
            Gunakan menu sidebar untuk navigasi. Kamu bisa mulai dari Domains/Services untuk update konten.
        </p>

        <div class="mt-5 p-4 rounded-2xl bg-white border border-brand-100">
            <div class="text-xs text-slate-500">Tips</div>
            <div class="text-sm font-semibold text-slate-900 mt-1">
                Rapihin data dulu, baru publish 🚀
            </div>
        </div>
    </div>

</div>

@endsection
