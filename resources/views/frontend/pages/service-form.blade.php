@extends('frontend.layouts.main')

@section('content')

<section class="min-h-screen relative flex items-center justify-center py-16">

    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="{{ asset('img/b service.jpg') }}"
            class="w-full h-full object-cover"
            alt="Service Background">
    </div>

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-blue-900/50 backdrop-blur-sm"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-2xl w-full px-6">

        <div class="bg-white shadow-2xl rounded-3xl p-10 border border-blue-100">

            {{-- Header --}}
            <div class="text-center mb-10">
                <h1 class="text-3xl font-extrabold text-slate-800">
                    Pesan Layanan
                </h1>
                <p class="text-blue-600 font-semibold mt-2 text-lg">
                    {{ $service->name }}
                </p>
                @if($service->price > 0)
                    <p class="text-slate-500 text-sm mt-1">
                        Mulai dari <strong class="text-slate-800">Rp {{ number_format($service->price, 0, ',', '.') }}</strong>
                    </p>
                @endif
                <p class="text-slate-600 mt-3 text-sm">{{ $service->description }}</p>
            </div>

            {{-- Success / Error Flash --}}
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-2xl text-green-700 text-sm font-semibold">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-2xl text-red-700 text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form --}}
            <form method="POST" action="{{ route('service.store', $service->slug) }}">
                @csrf

                <div class="space-y-5">

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition
                                   @error('name') border-red-400 @enderror"
                            placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition
                                   @error('email') border-red-400 @enderror"
                            placeholder="contoh@email.com">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Nomor HP / WhatsApp
                        </label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition"
                            placeholder="Contoh: 08123456789">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">
                            Ceritakan Kebutuhan Anda <span class="text-red-500">*</span>
                        </label>
                        <textarea name="message" rows="5"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition
                                   @error('message') border-red-400 @enderror"
                            placeholder="Jelaskan detail masalah atau fitur yang diinginkan...">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-bold py-3 rounded-xl shadow-lg transition-all duration-300">
                        Kirim Permintaan 🚀
                    </button>

                </div>
            </form>

            <p class="mt-6 text-center text-xs text-slate-400">
                Atau hubungi langsung via
                <a href="https://wa.me/6281335277477" target="_blank" class="text-green-600 font-semibold hover:underline">WhatsApp</a>
            </p>

        </div>
    </div>
</section>

@endsection
