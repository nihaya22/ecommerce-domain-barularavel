@extends('frontend.layouts.main')

@section('content')

<section class="py-16 min-h-screen bg-gradient-to-b from-blue-50 to-white">
    <div class="max-w-3xl mx-auto px-6">

        {{-- Breadcrumb --}}
        <div class="mb-8">
            <a href="{{ route('domain.index') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 hover:text-blue-800 transition">
                ← Kembali ke Daftar Domain
            </a>
        </div>

        {{-- Card Utama --}}
        <div class="bg-white rounded-3xl border border-blue-100 shadow-xl overflow-hidden">

            {{-- Header Card --}}
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-10 text-white">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <p class="text-blue-200 text-sm font-semibold uppercase tracking-wide mb-2">Domain</p>
                        <h1 class="text-3xl sm:text-4xl font-extrabold break-words">{{ $domain->name }}</h1>
                    </div>

                    {{-- Badge Status --}}
                    @if($domain->status === 'Available')
                        <span class="shrink-0 inline-flex items-center gap-2 px-4 py-2 rounded-full
                                     bg-green-400/20 border border-green-300/50 text-green-100 font-semibold text-sm">
                            <span class="h-2 w-2 rounded-full bg-green-400"></span>
                            Tersedia
                        </span>
                    @else
                        <span class="shrink-0 inline-flex items-center gap-2 px-4 py-2 rounded-full
                                     bg-red-400/20 border border-red-300/50 text-red-100 font-semibold text-sm">
                            <span class="h-2 w-2 rounded-full bg-red-400"></span>
                            Terjual
                        </span>
                    @endif
                </div>

                {{-- Harga --}}
                <div class="mt-6">
                    <p class="text-blue-200 text-sm">Harga</p>
                    <p class="text-4xl font-extrabold mt-1">
                        Rp {{ number_format($domain->price, 0, ',', '.') }}
                        <span class="text-lg font-normal text-blue-200">/tahun</span>
                    </p>
                </div>
            </div>

            {{-- Body Card --}}
            <div class="px-8 py-8">

                {{-- Deskripsi --}}
                @if($domain->description)
                    <div class="mb-8">
                        <h2 class="text-lg font-bold text-slate-800 mb-3">Tentang Domain Ini</h2>
                        <p class="text-slate-600 leading-relaxed">{{ $domain->description }}</p>
                    </div>
                @endif

                {{-- Fitur / Detail --}}
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100">
                        <p class="text-xs text-slate-500 font-semibold uppercase">Nama Domain</p>
                        <p class="mt-1 font-bold text-slate-800">{{ $domain->name }}</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100">
                        <p class="text-xs text-slate-500 font-semibold uppercase">Status</p>
                        <p class="mt-1 font-bold {{ $domain->status === 'Available' ? 'text-green-600' : 'text-red-500' }}">
                            {{ $domain->status === 'Available' ? 'Tersedia' : 'Terjual' }}
                        </p>
                    </div>
                    <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100">
                        <p class="text-xs text-slate-500 font-semibold uppercase">Harga</p>
                        <p class="mt-1 font-bold text-slate-800">Rp {{ number_format($domain->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100">
                        <p class="text-xs text-slate-500 font-semibold uppercase">Registrasi</p>
                        <p class="mt-1 font-bold text-slate-800">Langsung aktif</p>
                    </div>
                </div>

                {{-- CTA Buttons --}}
                @if($domain->status === 'Available')
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6281335277477?text=Halo%2C+saya+tertarik+membeli+domain+{{ urlencode($domain->name) }}+seharga+Rp+{{ number_format($domain->price, 0, '', '') }}"
                           target="_blank"
                           class="flex-1 text-center px-6 py-4 rounded-2xl bg-green-500 hover:bg-green-600
                                  text-white font-bold text-lg shadow-lg transition-all duration-300 hover:-translate-y-1">
                            💬 Beli via WhatsApp
                        </a>
                        <a href="{{ route('domain.index') }}"
                           class="flex-1 text-center px-6 py-4 rounded-2xl bg-white border border-blue-200
                                  hover:bg-blue-50 text-slate-700 font-semibold transition">
                            Lihat Domain Lain
                        </a>
                    </div>
                @else
                    <div class="p-5 rounded-2xl bg-red-50 border border-red-200 text-center">
                        <p class="text-red-600 font-semibold mb-3">Domain ini sudah terjual 😔</p>
                        <a href="{{ route('domain.index') }}"
                           class="inline-block px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700
                                  text-white font-semibold transition">
                            Cari Domain Lain
                        </a>
                    </div>
                @endif

            </div>
        </div>

    </div>
</section>

@endsection
