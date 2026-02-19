@extends('frontend.layouts.main')

@section('content')

{{-- ================= 1. HERO ================= --}}
<section class="py-8 sm:py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

        <div>
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold
                bg-brand-50 text-brand-700 border border-brand-100">
                🚀 Website bisnis jadi cepat & rapi
            </span>

            <h1 class="mt-4 text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Domain & layanan web<br class="hidden sm:block">
                dengan tampilan modern.
            </h1>

            <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed">
                Pilih domain premium, atur service, dan terima inquiry pelanggan.
                Semua terasa simpel dan profesional.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Hosting%2050GB"
                target="_blank"
                class="px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 transition
                text-white font-semibold shadow-soft text-center">
                Konsultasi Gratis
                </a>
            </div>

            <div class="mt-6 flex flex-wrap gap-4 text-sm text-slate-600">
                <div class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    Support responsif
                </div>
                <div class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    Proses cepat
                </div>
                <div class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    Tampilan clean
                </div>
            </div>
        </div>

        {{-- Hero Card --}}
        <div class="bg-white/90 backdrop-blur rounded-3xl border border-brand-100 shadow-soft p-6">
            <div class="flex items-center justify-between">
                <div>
                    <div class="text-sm text-slate-500">Mulai dari</div>
                    <div class="text-2xl font-extrabold text-slate-900 mt-1">Rp 150.000</div>
                </div>
                <div class="h-12 w-12 rounded-2xl bg-brand-600 text-white grid place-items-center font-bold shadow-soft">
                    ✦
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="p-4 rounded-2xl bg-brand-50 border border-brand-100">
                    <div class="font-semibold text-slate-900">Domain Premium</div>
                    <p class="text-sm text-slate-600 mt-1">Nama keren, siap branding.</p>
                </div>

                <div class="p-4 rounded-2xl bg-brand-50 border border-brand-100">
                    <div class="font-semibold text-slate-900">Services</div>
                    <p class="text-sm text-slate-600 mt-1">Paket web sesuai kebutuhan.</p>
                </div>

                <div class="p-4 rounded-2xl bg-brand-50 border border-brand-100">
                    <div class="font-semibold text-slate-900">Inquiries</div>
                    <p class="text-sm text-slate-600 mt-1">Pesan masuk tercatat rapi.</p>
                </div>

                <div class="p-4 rounded-2xl bg-brand-50 border border-brand-100">
                    <div class="font-semibold text-slate-900">Testimonials</div>
                    <p class="text-sm text-slate-600 mt-1">Tingkatkan kepercayaan.</p>
                </div>
            </div>

            <div class="mt-6 p-4 rounded-2xl bg-white border border-brand-100">
                <div class="text-xs text-slate-500">Highlight</div>
                <div class="mt-1 text-sm font-semibold text-slate-900">
                    UI biru muda + putih, modern & profesional ✅
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ================= 2. FEATURE STRIP ================= --}}
<section class="py-20 bg-gradient-to-b from-white to-blue-50">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Judul -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-slate-800">
                Mengapa Memilih
                <span class="text-blue-600">CV PabrikOnline Global Solusindo?</span>
            </h2>
        </div>

        <!-- Grid Card -->
        <div class="grid md:grid-cols-2 gap-8">

            <!-- CARD 1 -->
            <div data-aos="fade-up"
                 class="group relative bg-white rounded-3xl p-8 shadow-lg
                        hover:shadow-2xl transition-all duration-500
                        border border-blue-100 hover:border-blue-300">

                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-semibold text-blue-500 uppercase">
                            Easy & First
                        </p>
                        <h3 class="text-2xl font-bold mt-2 text-slate-800">
                            Website Builder yang Mudah
                        </h3>
                        <p class="mt-4 text-slate-600">
                            Bangun website dengan cepat tanpa perlu kemampuan teknis yang rumit.
                        </p>
                    </div>
                    <img src="/img/press.png"
                         class="w-18 h-18 object-contain transform group-hover:-translate-y-2 transition duration-500">
                </div>
            </div>

            <!-- CARD 2 -->
            <div data-aos="fade-up" data-aos-delay="150"
                 class="group relative bg-white rounded-3xl p-8 shadow-lg
                        hover:shadow-2xl transition-all duration-500
                        border border-blue-100 hover:border-blue-300">

                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-semibold text-blue-500 uppercase">
                            Suitable For All Users
                        </p>
                        <h3 class="text-2xl font-bold mt-2 text-slate-800">
                            Integrasi WordPress
                        </h3>
                        <p class="mt-4 text-slate-600">
                            Instalasi instan & optimasi penuh untuk website berbasis WordPress.
                        </p>
                    </div>
                    <img src="/img/pesawat.png"
                         class="w-18 h-18 object-contain transform group-hover:-translate-y-2 transition duration-500">
                </div>
            </div>

            <!-- CARD 3 -->
            <div data-aos="fade-up" data-aos-delay="300"
                 class="group relative bg-white rounded-3xl p-8 shadow-lg
                        hover:shadow-2xl transition-all duration-500
                        border border-blue-100 hover:border-blue-300">

                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-semibold text-blue-500 uppercase">
                            Commitment To
                        </p>
                        <h3 class="text-2xl font-bold mt-2 text-slate-800">
                            Dedicated Support
                        </h3>
                        <p class="mt-4 text-slate-600">
                            Tim support kami berpengalaman dan selalu responsif untuk kebutuhan Anda.
                        </p>
                    </div>
                    <img src="/img/team.png"
                         class="w-18 h-18 object-contain transform group-hover:-translate-y-2 transition duration-500">
                </div>
            </div>

            <!-- CARD 4 -->
            <div data-aos="fade-up" data-aos-delay="450"
                 class="group relative bg-white rounded-3xl p-8 shadow-lg
                        hover:shadow-2xl transition-all duration-500
                        border border-blue-100 hover:border-blue-300">

                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-semibold text-blue-500 uppercase">
                            Easy & Smooth
                        </p>
                        <h3 class="text-2xl font-bold mt-2 text-slate-800">
                            Migrasi Website Gratis
                        </h3>
                        <p class="mt-4 text-slate-600">
                            Pindahkan website dari penyedia lama ke server kami dengan mudah, cepat dan aman.
                        </p>
                    </div>
                    <img src="/img/mudah.png"
                         class="w-18 h-18 object-contain transform group-hover:-translate-y-2 transition duration-500">
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ================= 3. SERVICES (DINAMIS DARI DATABASE) ================= --}}
<section class="py-24 bg-gradient-to-b from-white to-blue-50">

    <div class="max-w-6xl mx-auto px-6">

        <!-- Title -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-slate-800">
                Layanan <span class="text-blue-600">Kami</span>
            </h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Kami siap membantu kebutuhan website Anda dengan solusi cepat, profesional, dan terpercaya.
            </p>
        </div>

        @php
            $serviceIcons = ['🛠', '➕', '🔍', '🚀', '💡', '⚙️'];
            $serviceColors = ['bg-blue-600', 'bg-indigo-600', 'bg-emerald-600', 'bg-purple-600', 'bg-orange-500', 'bg-teal-600'];
        @endphp

        <!-- Cards -->
        @if($services->isEmpty())
            <div class="text-center py-16 bg-white rounded-3xl border border-blue-100 shadow-sm">
                <p class="text-slate-500 text-lg">Belum ada layanan aktif saat ini.</p>
                <a href="https://wa.me/6281335277477" target="_blank"
                   class="inline-block mt-6 px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                    Hubungi Kami
                </a>
            </div>
        @else
            <div class="grid md:grid-cols-3 gap-10">
                @foreach($services as $index => $service)
                @php
                    $icon  = $serviceIcons[$index % count($serviceIcons)];
                    $color = $serviceColors[$index % count($serviceColors)];
                @endphp

                <div data-aos="fade-up" data-aos-delay="{{ $index * 150 }}"
                    class="group bg-white p-10 rounded-3xl shadow-lg border border-blue-100
                            hover:shadow-2xl hover:-translate-y-4
                            transition-all duration-500">

                    <div class="w-16 h-16 flex items-center justify-center
                                {{ $color }} text-white rounded-2xl mb-6
                                group-hover:scale-110 group-hover:rotate-6
                                transition duration-500 text-2xl">
                        {{ $icon }}
                    </div>

                    <h3 class="text-2xl font-bold text-slate-800 mb-4">
                        {{ $service->name }}
                    </h3>

                    @if($service->description)
                        <p class="text-slate-600 leading-relaxed">
                            {{ $service->description }}
                        </p>
                    @endif

                    @if($service->price > 0)
                        <p class="mt-4 text-blue-700 font-semibold">
                            Mulai Rp {{ number_format($service->price, 0, ',', '.') }}
                        </p>
                    @endif

                    <a href="{{ route('service.show', $service->slug) }}"
                       class="inline-block mt-6 bg-blue-600 text-white px-5 py-2 rounded-xl hover:bg-blue-700 transition">
                        Pesan Sekarang
                    </a>

                </div>
                @endforeach
            </div>
        @endif

    </div>
</section>

{{-- ================= 4. TESTIMONIALS ================= --}}
<section class="py-24 bg-gradient-to-b from-blue-50 to-white relative overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute -top-20 -left-20 w-96 h-96 bg-blue-200 rounded-full blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-indigo-200 rounded-full blur-3xl opacity-30 animate-pulse"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">

        <!-- Title -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-slate-800">
                Apa Kata <span class="text-blue-600">Klien Kami?</span>
            </h2>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Kami telah membantu berbagai bisnis dalam membangun dan mengembangkan website mereka.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid md:grid-cols-3 gap-8">

            @foreach($testimonials as $index => $item)

            <div data-aos="fade-up"
                 data-aos-delay="{{ $index * 150 }}"
                class="group relative bg-white/70 backdrop-blur-lg p-8 rounded-3xl
                        border border-blue-100 shadow-xl
                        hover:shadow-2xl hover:-translate-y-3
                        transition-all duration-500">

                <!-- Kutip -->
                <div class="absolute -top-5 left-6 bg-blue-600 text-white
                            w-10 h-10 flex items-center justify-center
                            rounded-full text-xl shadow-lg">
                    "
                </div>

                <!-- Pesan -->
                <p class="text-slate-700 leading-relaxed mt-6">
                    {{ $item->message }}
                </p>

                <!-- User -->
                <div class="flex items-center mt-6">

                    @if($item->photo)
                        <img src="{{ asset('storage/'.$item->photo) }}"
                            class="w-14 h-14 rounded-full object-cover
                                    ring-4 ring-blue-100
                                    transform group-hover:scale-110
                                    transition duration-500">
                    @else
                        <div class="w-14 h-14 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                            {{ strtoupper(substr($item->name,0,1)) }}
                        </div>
                    @endif

                    <div class="ml-4">
                        <h4 class="font-semibold text-slate-800">
                            {{ $item->name }}
                        </h4>
                        <p class="text-sm text-slate-500">
                            {{ $item->position }}
                        </p>
                    </div>

                </div>

                <!-- Rating -->
                <div class="flex items-center mt-6 space-x-1">

                    @php
                        $rating = (int) $item->rating;
                    @endphp

                    @for($i = 1; $i <= 5; $i++)
                        <svg class="w-5 h-5 {{ $i <= $rating ? 'text-yellow-400' : 'text-gray-300' }}"
                             fill="currentColor"
                             viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97
                            4.18.034c.969.008 1.371 1.24.588 1.81l-3.388 2.463
                            1.287 3.97c.3.921-.755 1.688-1.54 1.118L10 13.347
                            l-3.364 2.945c-.784.57-1.838-.197-1.539-1.118
                            l1.287-3.97-3.388-2.463c-.783-.57-.38-1.802.588-1.81
                            l4.18-.034 1.286-3.97z"/>
                        </svg>
                    @endfor

                    <span class="text-sm text-gray-500 ml-2">
                        ({{ $rating }}/5)
                    </span>

                </div>

            </div>

            @endforeach

        </div>
    </div>
</section>

@endsection
