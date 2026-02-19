@extends('admin.layouts.main')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-extrabold text-slate-900">Domains</h1>
        <p class="text-sm text-slate-600 mt-1">Kelola data domain (CRUD).</p>
    </div>

    <a href="{{ route('admin.domains.create') }}"
       class="px-4 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 transition text-white font-semibold shadow-soft">
        + Tambah Domain
    </a>
</div>

@if(session('success'))
    <div class="mb-4 p-3 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-200">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white/90 rounded-2xl border border-brand-100 shadow-soft overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-brand-50 text-slate-700">
                <tr class="text-left">
                    <th class="px-6 py-3 font-semibold">#</th>
                    <th class="px-6 py-3 font-semibold">Nama</th>
                    <th class="px-6 py-3 font-semibold">Harga</th>
                    <th class="px-6 py-3 font-semibold">Status</th>
                    <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-brand-100">
                @forelse($domains as $d)
                    <tr class="hover:bg-brand-50/60 transition">
                        <td class="px-6 py-4 text-slate-600">{{ $d->id }}</td>
                        <td class="px-6 py-4 font-semibold text-slate-900">{{ $d->name }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($d->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4">{{ $d->status }}</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.domains.edit', $d) }}"
                                   class="px-3 py-2 rounded-xl bg-white border border-brand-200 hover:bg-brand-50 transition font-semibold text-slate-700">
                                    Edit
                                </a>

                                <form action="{{ route('admin.domains.destroy', $d) }}" method="POST"
                                      onsubmit="return confirm('Yakin hapus domain ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-2 rounded-xl bg-red-600 hover:bg-red-700 transition text-white font-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-6 py-10 text-center text-slate-600">Belum ada data domain.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
