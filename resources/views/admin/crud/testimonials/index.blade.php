@extends('admin.layouts.main')

@section('content')

{{-- HEADER --}}
<div class="flex justify-between items-center mb-6">
    <div>
        <h1 class="text-2xl font-bold text-slate-900">Testimonials</h1>
        <p class="text-sm text-slate-500 mt-1">Kelola ulasan pelanggan yang tampil di halaman utama</p>
    </div>
    <a href="{{ route('admin.testimonials.create') }}"
       class="px-4 py-2.5 bg-brand-600 hover:bg-brand-700 text-white rounded-xl font-semibold transition">
        + Tambah Testimonial
    </a>
</div>

{{-- FLASH MESSAGE --}}
@if(session('success'))
    <div class="mb-5 px-4 py-3 bg-green-50 border border-green-200 text-green-700 rounded-xl text-sm font-semibold">
        ✅ {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-5 px-4 py-3 bg-red-50 border border-red-200 text-red-700 rounded-xl text-sm">
        <ul class="list-disc list-inside space-y-1">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- TABLE --}}
<div class="bg-white rounded-2xl shadow-soft border border-brand-100 overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-slate-50 border-b border-slate-100">
            <tr>
                <th class="p-3 text-left text-slate-600 font-semibold w-10">#</th>
                <th class="p-3 text-left text-slate-600 font-semibold">Foto</th>
                <th class="p-3 text-left text-slate-600 font-semibold">Nama & Jabatan</th>
                <th class="p-3 text-left text-slate-600 font-semibold">Rating</th>
                <th class="p-3 text-left text-slate-600 font-semibold">Pesan</th>
                <th class="p-3 text-left text-slate-600 font-semibold">Status</th>
                <th class="p-3 text-center text-slate-600 font-semibold">Aksi</th>
            </tr>
        </thead>

        <tbody>
        @forelse($testimonials as $testimonial)
        <tr class="border-t border-slate-100 hover:bg-slate-50 transition align-middle">

            {{-- ID --}}
            <td class="p-3 text-slate-400">{{ $testimonial->id }}</td>

            {{-- FOTO --}}
            <td class="p-3">
                @if($testimonial->photo)
                    <img src="{{ asset('storage/'.$testimonial->photo) }}"
                         class="w-12 h-12 rounded-full object-cover ring-2 ring-brand-100">
                @else
                    <div class="w-12 h-12 rounded-full bg-brand-600 text-white
                                flex items-center justify-center font-bold text-lg">
                        {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                    </div>
                @endif
            </td>

            {{-- NAMA & JABATAN --}}
            <td class="p-3">
                <p class="font-semibold text-slate-800">{{ $testimonial->name }}</p>
                <p class="text-xs text-slate-500">{{ $testimonial->position }}</p>
            </td>

            {{-- RATING --}}
            <td class="p-3">
                <div class="flex items-center gap-1 text-yellow-400">
                    @for($i = 1; $i <= 5; $i++)
                        <span class="{{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-200' }}">★</span>
                    @endfor
                </div>
                <span class="text-xs text-slate-400">{{ $testimonial->rating }}/5</span>
            </td>

            {{-- PESAN --}}
            <td class="p-3 max-w-xs text-slate-600">
                {{ Str::limit($testimonial->message, 70) }}
            </td>

            {{-- STATUS --}}
            <td class="p-3">
                @if($testimonial->status === 'Active')
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold
                                 bg-green-50 text-green-700 border border-green-200">
                        ● Active
                    </span>
                @else
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold
                                 bg-gray-100 text-gray-500 border border-gray-200">
                        ○ Inactive
                    </span>
                @endif
            </td>

            {{-- AKSI --}}
            <td class="p-3">
                <div class="flex items-center justify-center gap-2">

                    {{-- Edit --}}
                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                       class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg
                              bg-blue-50 text-blue-700 border border-blue-200
                              hover:bg-blue-100 transition text-xs font-semibold">
                        ✏️ Edit
                    </a>

                    {{-- Delete --}}
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}"
                          method="POST"
                          onsubmit="return confirm('Yakin hapus testimonial dari {{ $testimonial->name }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg
                                       bg-red-50 text-red-600 border border-red-200
                                       hover:bg-red-100 transition text-xs font-semibold">
                            🗑 Hapus
                        </button>
                    </form>

                </div>
            </td>

        </tr>
        @empty
        <tr>
            <td colspan="7" class="p-10 text-center text-slate-400">
                <div class="text-4xl mb-2">😶</div>
                <p>Belum ada testimonial. <a href="{{ route('admin.testimonials.create') }}" class="text-brand-600 underline">Tambah sekarang</a></p>
            </td>
        </tr>
        @endforelse
        </tbody>
    </table>
</div>

@endsection
