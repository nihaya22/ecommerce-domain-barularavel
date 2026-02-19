@extends('frontend.layouts.main')

@section('content')

{{-- ================= CONTACT: DUKUNGAN TEKNIS ================= --}}
<section class="w-full bg-blue-800 py-20 text-white min-h-screen">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">

        <!-- LEFT SIDE -->
        <div class="w-full md:w-1/2">

            <!-- JUDUL -->
            <h1 class="text-4xl font-extrabold mb-4 text-center md:text-left">
                Dukungan Teknis 24/7 🚀
            </h1>

            <!-- KOTAK DESKRIPSI -->
            <div class="bg-blue-700/50 border border-blue-400 rounded-2xl p-6 mb-8">
                <p class="text-blue-100">
                    Mau tanya hosting, domain, atau jasa pembuatan website?
                    Tim support kami selalu tersedia untuk memastikan layanan Anda berjalan lancar tanpa hambatan 💙
                </p>
            </div>

            <!-- ICON KONTAK -->
            <div class="flex gap-6 justify-center md:justify-start flex-wrap">

                <!-- Email -->
                <a href="mailto:admin@pabrikonline.id"
                class="flex flex-col items-center hover:scale-110 transition duration-300">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center">
                        <img src="{{ asset('img/gmail.jpg') }}" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-sm">Email</span>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/6281335277477"
                target="_blank"
                class="flex flex-col items-center hover:scale-110 transition duration-300">
                    <div class="bg-green-500 rounded-full w-20 h-20 flex items-center justify-center">
                        <img src="{{ asset('img/wa.jpg') }}" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-sm">WhatsApp</span>
                </a>

                <!-- Instagram -->
                <a href="#"
                class="flex flex-col items-center hover:scale-110 transition duration-300">
                    <div class="bg-gradient-to-tr from-pink-500 to-purple-600 rounded-full w-20 h-20 flex items-center justify-center">
                        <img src="{{ asset('img/ig.jpg') }}" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-sm">Instagram</span>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/essa-jaka-199b43256/?originalSubdomain=id"
                class="flex flex-col items-center hover:scale-110 transition duration-300">
                    <div class="bg-blue-700 rounded-full w-20 h-20 flex items-center justify-center">
                        <img src="{{ asset('img/li.jpg') }}" class="w-10 h-10">
                    </div>
                    <span class="mt-2 text-sm">LinkedIn</span>
                </a>

            </div>

            {{-- Form Kontak --}}
            <div class="mt-12 bg-white/10 border border-blue-400 rounded-3xl p-8">
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan Langsung</h2>

                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-500/30 border border-green-400 rounded-xl text-green-100 font-semibold">
                        ✅ {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-blue-200 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               placeholder="Masukkan nama Anda"
                               class="w-full px-4 py-3 rounded-xl bg-white/10 border border-blue-400
                                      text-white placeholder-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300
                                      @error('name') border-red-400 @enderror">
                        @error('name')<p class="text-red-300 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-blue-200 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               placeholder="contoh@email.com"
                               class="w-full px-4 py-3 rounded-xl bg-white/10 border border-blue-400
                                      text-white placeholder-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300
                                      @error('email') border-red-400 @enderror">
                        @error('email')<p class="text-red-300 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-blue-200 mb-2">Nomor WhatsApp</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                               placeholder="Contoh: 08123456789"
                               class="w-full px-4 py-3 rounded-xl bg-white/10 border border-blue-400
                                      text-white placeholder-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-blue-200 mb-2">Pesan</label>
                        <textarea name="message" rows="4"
                               placeholder="Ceritakan kebutuhan Anda..."
                               class="w-full px-4 py-3 rounded-xl bg-white/10 border border-blue-400
                                      text-white placeholder-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-300
                                      @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                        @error('message')<p class="text-red-300 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit"
                            class="w-full px-6 py-3 rounded-xl bg-white text-blue-800 font-bold
                                   hover:bg-blue-50 transition shadow-lg">
                        Kirim Pesan 🚀
                    </button>
                </form>
            </div>

        </div>

        <!-- RIGHT SIDE IMAGE -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="{{ asset('img/kontak.png') }}"
                alt="Customer Support"
                class="w-full max-w-md">
        </div>

    </div>
</section>

@endsection
