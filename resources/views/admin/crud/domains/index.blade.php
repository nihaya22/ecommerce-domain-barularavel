@extends('admin.layouts.main')

@section('title', 'Domains')

@section('content')

{{-- Header --}}
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-extrabold text-slate-900">Domains</h1>
        <p class="text-sm text-slate-500 mt-1">Kelola data domain (CRUD).</p>
    </div>
    <a href="{{ route('admin.domains.create') }}"
       class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700
              transition text-white font-semibold shadow-soft text-sm">
        + Tambah Domain
    </a>
</div>

{{-- Alert sukses --}}
@if(session('success'))
    <div class="mb-4 px-4 py-3 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm font-medium flex items-center gap-2">
        ✅ {{ session('success') }}
    </div>
@endif

{{-- Tabel --}}
<div class="overflow-x-auto rounded-xl border border-brand-100">
    <table class="w-full text-sm">
        <thead class="bg-brand-50 text-slate-500 font-semibold uppercase text-xs tracking-wide">
            <tr>
                <th class="px-4 py-3 text-left w-10">#</th>
                <th class="px-4 py-3 text-left">Nama Domain</th>
                <th class="px-4 py-3 text-left">Harga</th>
                <th class="px-4 py-3 text-left">Status</th>
                <th class="px-4 py-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-brand-50">
            @forelse($domains as $i => $domain)
            <tr class="hover:bg-brand-50/40 transition">
                <td class="px-4 py-3 text-slate-400">{{ $domains->firstItem() + $i }}</td>
                <td class="px-4 py-3">
                    <div class="font-semibold text-slate-800">{{ $domain->name }}</div>
                    @if($domain->description)
                        <div class="text-xs text-slate-400 mt-0.5 truncate max-w-xs">{{ $domain->description }}</div>
                    @endif
                </td>
                <td class="px-4 py-3 font-semibold text-slate-700">
                    {{ $domain->price_formatted }}
                </td>
                <td class="px-4 py-3">
                    @if($domain->status === 'Available')
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-bold
                                     bg-green-100 text-green-700">
                            ● Available
                        </span>
                    @else
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-bold
                                     bg-red-100 text-red-600">
                            ● Sold
                        </span>
                    @endif
                </td>
                <td class="px-4 py-3">
                    <div class="flex items-center gap-2">
                        <a href="{{ route('admin.domains.edit', $domain) }}"
                           class="px-3 py-1.5 rounded-lg bg-brand-50 hover:bg-brand-100 text-brand-700
                                  text-xs font-semibold transition border border-brand-200">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('admin.domains.destroy', $domain) }}" method="POST"
                              onsubmit="return confirm('Hapus domain {{ $domain->name }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1.5 rounded-lg bg-red-50 hover:bg-red-100 text-red-600
                                           text-xs font-semibold transition border border-red-200">
                                🗑️ Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-4 py-16 text-center">
                    <div class="text-4xl mb-3">🌐</div>
                    <div class="font-semibold text-slate-600 mb-1">Belum ada data domain.</div>
                    <div class="text-sm text-slate-400">Klik "+ Tambah Domain" untuk menambahkan.</div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
@if($domains->hasPages())
    <div class="mt-4">
        {{ $domains->links() }}
    </div>
@endif

@endsection