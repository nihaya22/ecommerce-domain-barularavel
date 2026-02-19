@extends('admin.layouts.main')

@section('content')

{{-- ================= PAGE HEADER ================= --}}
<div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            Testimonials
        </h1>
        <p class="text-sm text-slate-600 mt-1">
            Kelola testimoni (publish / draft) dengan tampilan rapi.
        </p>
    </div>

    <div class="flex flex-col sm:flex-row gap-2">
        <div class="relative">
            <input type="text" placeholder="Cari nama / role..."
                   class="w-full sm:w-72 pl-10 pr-4 py-2.5 rounded-xl border border-brand-200 bg-white
                          focus:outline-none focus:ring-2 focus:ring-brand-300">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">⌕</span>
        </div>

        <a href="{{ route('admin.dashboard') }}"
           class="px-4 py-2.5 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition
                  text-slate-700 font-medium">
            ⬅ Dashboard
        </a>

        <button class="px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft">
            + Tambah Testimoni
        </button>
    </div>
</div>

{{-- ================= TABLE CARD ================= --}}
<div class="bg-white rounded-2xl border border-brand-100 shadow-soft overflow-hidden">

    {{-- Top bar --}}
    <div class="px-6 py-4 border-b border-brand-100 bg-white/70">
        <div class="flex items-center justify-between gap-3">
            <div class="text-sm text-slate-600">
                Total: <span class="font-semibold text-slate-900">{{ is_array($testimonials) ? count($testimonials) : 0 }}</span> testimoni
            </div>

            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span> Published
                </span>
                <span class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600">
                    <span class="h-2 w-2 rounded-full bg-slate-400"></span> Draft
                </span>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-brand-50 text-slate-700">
                <tr class="text-left">
                    <th class="px-6 py-3 font-semibold">#</th>
                    <th class="px-6 py-3 font-semibold">Nama</th>
                    <th class="px-6 py-3 font-semibold">Role</th>
                    <th class="px-6 py-3 font-semibold">Pesan</th>
                    <th class="px-6 py-3 font-semibold">Rating</th>
                    <th class="px-6 py-3 font-semibold">Status</th>
                    <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-brand-100">
                @if(empty($testimonials) || count($testimonials) === 0)
                    <tr>
                        <td colspan="7" class="px-6 py-10 text-center text-slate-600">
                            Belum ada testimonial 😄
                        </td>
                    </tr>
                @else
                    @foreach($testimonials as $t)
                        @php
                            $rating = (int) ($t['rating'] ?? 0);
                            if ($rating < 0) $rating = 0;
                            if ($rating > 5) $rating = 5;
                        @endphp

                        <tr class="hover:bg-brand-50/60 transition align-top">
                            <td class="px-6 py-4 text-slate-600">{{ $t['id'] }}</td>

                            <td class="px-6 py-4">
                                <div class="font-semibold text-slate-900">{{ $t['name'] }}</div>
                                <div class="text-xs text-slate-500 mt-0.5">Testimonial</div>
                            </td>

                            <td class="px-6 py-4 text-slate-700">{{ $t['role'] }}</td>

                            <td class="px-6 py-4 max-w-xl">
                                <details class="group">
                                    <summary class="cursor-pointer select-none text-slate-900">
                                        <span class="line-clamp-2">
                                            {{ $t['message'] }}
                                        </span>
                                        <span class="mt-2 inline-flex items-center gap-2 text-xs font-semibold text-brand-700">
                                            Detail
                                            <span class="group-open:rotate-180 transition">▾</span>
                                        </span>
                                    </summary>

                                    <div class="mt-3 p-4 rounded-2xl bg-white border border-brand-100 text-slate-700">
                                        {{ $t['message'] }}
                                    </div>
                                </details>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1">
                                    @for($i=1; $i<=5; $i++)
                                        <span class="{{ $i <= $rating ? 'text-amber-500' : 'text-slate-300' }}">★</span>
                                    @endfor
                                    <span class="ml-2 text-xs font-semibold text-slate-700">
                                        {{ $rating }}/5
                                    </span>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                @if(($t['status'] ?? '') === 'Published')
                                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold
                                                 bg-emerald-50 text-emerald-800 border border-emerald-200">
                                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                        Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold
                                                 bg-slate-100 text-slate-700 border border-slate-200">
                                        <span class="h-2 w-2 rounded-full bg-slate-400"></span>
                                        Draft
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-2">
                                    <button
                                        class="px-3 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft">
                                        Publish
                                    </button>

                                    <button
                                        class="px-3 py-2 rounded-xl bg-red-600 hover:bg-red-700 transition text-white font-semibold">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-brand-100 bg-white/70 text-sm text-slate-600">
        Tips: klik <span class="font-semibold text-slate-900">Detail</span> untuk membaca pesan lengkap.
    </div>
</div>

@endsection
