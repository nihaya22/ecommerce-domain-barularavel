@extends('frontend.layouts.main')

@section('content')
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900">Cek Domain</h1>
                <p class="text-slate-600 mt-1">Pilih domain yang tersedia untuk bisnismu.</p>
            </div>

            <a href="/"
               class="px-4 py-2.5 rounded-xl bg-white border border-blue-100 hover:bg-blue-50 transition font-semibold text-slate-700">
                ⬅ Kembali
            </a>
        </div>

        {{-- Info total --}}
        <div class="mt-6 flex items-center justify-between flex-wrap gap-3">
            <div class="text-sm text-slate-600">
                Total: <span class="font-bold text-slate-900">{{ $domains->count() }}</span> domain
            </div>

            <div class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                <span class="inline-flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-green-500"></span> Available
                </span>
                <span class="inline-flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-red-500"></span> Sold
                </span>
            </div>
        </div>

        {{-- Grid list --}}
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse($domains as $domain)
                <div class="bg-white/80 border border-blue-100 rounded-2xl p-5 shadow-sm">
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <div class="font-extrabold text-slate-900 text-lg">
                                {{ $domain->name }}
                            </div>

                            <div class="text-sm text-slate-600 mt-1">
                                Rp {{ number_format($domain->price, 0, ',', '.') }}
                            </div>
                        </div>

                        @if($domain->status === 'Available')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-50 text-green-700 border border-green-200">
                                Available
                            </span>
                        @else
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-red-50 text-red-700 border border-red-200">
                                Sold
                            </span>
                        @endif
                    </div>

                    @if(!empty($domain->description))
                        <p class="text-sm text-slate-600 mt-3">
                            {{ $domain->description }}
                        </p>
                    @endif

                    <div class="mt-4">
                        {{-- sementara pakai ID biar aman (kalau slug belum ada) --}}
                        <a href="{{ route('domain.show', $domain->slug) }}"

                           class="inline-flex w-full justify-center py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @empty
                <div class="text-slate-600">
                    Belum ada data domain. Tambah dulu dari admin.
                </div>
            @endforelse
        </div>

    </div>
</section>
@endsection
