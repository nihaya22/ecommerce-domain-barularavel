@extends('admin.layouts.main')

@section('content')

<div class="max-w-2xl mx-auto">

    {{-- HEADER --}}
    <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('admin.testimonials') }}"
           class="text-slate-400 hover:text-slate-700 transition text-xl">←</a>
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Edit Testimonial</h1>
            <p class="text-sm text-slate-500 mt-0.5">Ubah data testimonial dari <strong>{{ $testimonial->name }}</strong></p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-soft border border-brand-100 p-8">

        <form action="{{ route('admin.testimonials.update', $testimonial) }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-5">
            @csrf
            @method('PUT')

            {{-- Error --}}
            @if($errors->any())
                <div class="p-4 bg-red-50 border border-red-200 text-red-700 rounded-xl text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Nama & Jabatan --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1.5 text-sm font-semibold text-slate-700">
                        Nama <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name"
                           value="{{ old('name', $testimonial->name) }}"
                           class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm
                                  focus:ring-2 focus:ring-brand-500 focus:border-brand-400 outline-none transition
                                  @error('name') border-red-400 @enderror"
                           required>
                </div>

                <div>
                    <label class="block mb-1.5 text-sm font-semibold text-slate-700">
                        Jabatan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="position"
                           value="{{ old('position', $testimonial->position) }}"
                           class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm
                                  focus:ring-2 focus:ring-brand-500 focus:border-brand-400 outline-none transition
                                  @error('position') border-red-400 @enderror"
                           required>
                </div>
            </div>

            {{-- Pesan --}}
            <div>
                <label class="block mb-1.5 text-sm font-semibold text-slate-700">
                    Pesan <span class="text-red-500">*</span>
                </label>
                <textarea name="message" rows="4"
                          class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm
                                 focus:ring-2 focus:ring-brand-500 focus:border-brand-400 outline-none transition
                                 @error('message') border-red-400 @enderror"
                          required>{{ old('message', $testimonial->message) }}</textarea>
            </div>

            {{-- Rating & Status --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1.5 text-sm font-semibold text-slate-700">Rating</label>
                    <select name="rating"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm
                                   focus:ring-2 focus:ring-brand-500 outline-none transition">
                        @for($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>
                                {{ str_repeat('⭐', $i) }} ({{ $i }})
                            </option>
                        @endfor
                    </select>
                </div>

                <div>
                    <label class="block mb-1.5 text-sm font-semibold text-slate-700">Status</label>
                    <select name="status"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm
                                   focus:ring-2 focus:ring-brand-500 outline-none transition">
                        <option value="Active" {{ old('status', $testimonial->status) === 'Active' ? 'selected' : '' }}>
                            ✅ Active (tampil di halaman)
                        </option>
                        <option value="Inactive" {{ old('status', $testimonial->status) === 'Inactive' ? 'selected' : '' }}>
                            ⛔ Inactive (disembunyikan)
                        </option>
                    </select>
                </div>
            </div>

            {{-- Foto --}}
            <div>
                <label class="block mb-1.5 text-sm font-semibold text-slate-700">
                    Foto Profil
                </label>

                {{-- Preview foto saat ini --}}
                @if($testimonial->photo)
                    <div class="flex items-center gap-4 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-200">
                        <img src="{{ asset('storage/'.$testimonial->photo) }}"
                             class="w-16 h-16 rounded-full object-cover ring-2 ring-brand-100">
                        <div>
                            <p class="text-xs text-slate-500">Foto saat ini</p>
                            <p class="text-sm text-slate-700 font-medium">Upload baru untuk mengganti</p>
                        </div>
                    </div>
                @else
                    <div class="flex items-center gap-4 mb-3 p-3 bg-slate-50 rounded-xl border border-slate-200">
                        <div class="w-16 h-16 rounded-full bg-brand-600 text-white
                                    flex items-center justify-center font-bold text-2xl">
                            {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                        </div>
                        <p class="text-sm text-slate-500">Belum ada foto. Upload di bawah untuk menambahkan.</p>
                    </div>
                @endif

                <input type="file" name="photo" accept="image/jpg,image/jpeg,image/png"
                       class="w-full border border-gray-300 rounded-xl px-4 py-2.5 text-sm
                              focus:ring-2 focus:ring-brand-500 outline-none transition">
                <p class="text-xs text-slate-400 mt-1">JPG/PNG, maks 2MB. Kosongkan jika tidak ingin mengubah foto.</p>
            </div>

            {{-- ACTIONS --}}
            <div class="flex items-center gap-3 pt-2">
                <button type="submit"
                        class="px-6 py-3 bg-brand-600 hover:bg-brand-700 text-white rounded-xl
                               font-semibold text-sm transition shadow-soft">
                    💾 Simpan Perubahan
                </button>
                <a href="{{ route('admin.testimonials') }}"
                   class="px-6 py-3 bg-white border border-slate-200 text-slate-700
                          hover:bg-slate-50 rounded-xl font-semibold text-sm transition">
                    Batal
                </a>
            </div>

        </form>
    </div>
</div>

@endsection
