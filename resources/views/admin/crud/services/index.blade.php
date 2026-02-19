@extends('admin.layouts.main')

@section('content')

{{-- ================= PAGE HEADER ================= --}}
<div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
    <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
            Services
        </h1>
        <p class="text-sm text-slate-600 mt-1">
            Kelola daftar service (harga & status).
        </p>
    </div>

    <div class="flex flex-col sm:flex-row gap-2">
        <div class="relative">
            <input type="text" placeholder="Cari service..."
                   class="w-full sm:w-72 pl-10 pr-4 py-2.5 rounded-xl border border-brand-200 bg-white
                          focus:outline-none focus:ring-2 focus:ring-brand-300">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">⌕</span>
        </div>

        <a href="{{ route('admin.dashboard') }}"
           class="px-4 py-2.5 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition
                  text-slate-700 font-medium">
            ⬅ Dashboard
        </a>

        {{-- tombol harus link ke create --}}
        <a href="{{ route('admin.services.create') }}"
           class="px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft">
            + Tambah Service
        </a>
    </div>
</div>

{{-- ================= TABLE CARD ================= --}}
<div class="bg-white rounded-2xl border border-brand-100 shadow-soft overflow-hidden">

    {{-- Top bar --}}
    <div class="px-6 py-4 border-b border-brand-100 bg-white/70">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div class="text-sm text-slate-600">
                Total: <span class="font-semibold text-slate-900">{{ $services->count() }}</span> service
            </div>

            <div class="flex items-center gap-2">
                <span class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span> Active
                </span>
                <span class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600">
                    <span class="h-2 w-2 rounded-full bg-slate-400"></span> Inactive
                </span>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-brand-50 text-slate-700">
                <tr class="text-left">
                    <th class="px-6 py-3 font-semibold">#</th>
                    <th class="px-6 py-3 font-semibold">Nama Service</th>
                    <th class="px-6 py-3 font-semibold">Harga</th>
                    <th class="px-6 py-3 font-semibold">Status</th>
                    <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-brand-100">
                @forelse($services as $service)
                    <tr class="hover:bg-brand-50/60 transition">
                        <td class="px-6 py-4 text-slate-600">{{ $service->id }}</td>

                        <td class="px-6 py-4">
                            <div class="font-semibold text-slate-900">{{ $service->name }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">Slug: {{ $service->slug }}</div>
                        </td>

                        <td class="px-6 py-4 font-semibold text-slate-900">
                            Rp {{ number_format($service->price, 0, ',', '.') }}
                        </td>

                        <td class="px-6 py-4">
                            @if($service->status === 'Active')
                                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold
                                             bg-emerald-50 text-emerald-800 border border-emerald-200">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold
                                             bg-slate-100 text-slate-700 border border-slate-200">
                                    <span class="h-2 w-2 rounded-full bg-slate-400"></span>
                                    Inactive
                                </span>
                            @endif
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                   class="px-3 py-2 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition
                                          text-slate-700 font-semibold">
                                    Edit
                                </a>

                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST"
                                      onsubmit="return confirm('Yakin hapus service ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="px-3 py-2 rounded-xl bg-red-600 hover:bg-red-700 transition text-white font-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-slate-600">
                            Belum ada data service 😄
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-brand-100 bg-white/70 text-sm text-slate-600">
        Tips: gunakan tombol <span class="font-semibold text-slate-900">Tambah Service</span> untuk menambah layanan baru.
    </div>
</div>

@endsection
