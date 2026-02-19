@extends('frontend.layouts.main')

@section('content')

{{-- ================= 1.HERO tampilan 2 ================= --}}
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

{{---==========================2.pricelist hosting=====================================================----}}
<section id="hosting" class="py-16 bg-gray-50">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold mb-12">
            Paket Hosting Fleksibel, Sesuai Kebutuhan Anda
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Paket 1 -->
            <div class="bg-white rounded-xl shadow p-8">
                <h3 class="text-xl font-semibold mb-2">BIG Disk 50GB</h3>
                <p class="text-gray-500 mb-4">Server Indonesia / Singapura</p>
                <p class="text-gray-500 mb-4"><i>Hanya</i></p>
                <h3 class="text-xl font-semibold mb-2">___>.<___</h3>
                <p class="text-3xl font-bold mb-6">Rp50.000,-/bulan</p>

                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Hosting%2050GB"
                    target="_blank"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg inline-block">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Paket 2 -->
            <div class="bg-white rounded-xl shadow p-8">
                <h3 class="text-xl font-semibold mb-2">Unlimited Disk</h3>
                <p class="text-gray-500 mb-4">Server Indonesia / Singapura</p>
                <p class="text-gray-500 mb-4"><i>Hanya</i></p>
                <h3 class="text-xl font-semibold mb-2">___>.<___</h3>
                <p class="text-3xl font-bold mb-6">Rp100.000,-/bulan</p>

                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Hosting%20Unlimited"
                target="_blank"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg inline-block">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Paket 3 -->
            <div class="bg-white rounded-xl shadow p-8">
                <h3 class="text-xl font-semibold mb-2">Jasa Pembuatan Website</h3>
                <p class="text-gray-500 mb-4">Company Profile hingga Custom Apps</p>
                <p class="text-gray-500 mb-4"><i>mulai</i></p>
                <h3 class="text-xl font-semibold mb-2">___>.<___</h3>
                <p class="text-3xl font-bold mb-6">Rp1.500.000,-/website</p>

                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Jasa%20Pembuatan%20Website"
                target="_blank"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg inline-block">
                    Pesan Sekarang
                </a>
            </div>

        </div>
    </div>
</section>


{{-- ================= 3.FEATURE STRIP ================= --}}
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

                    <!-- ICON / FOTO -->
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


{{-- ================= CTA WEBSITE (jasa pembuatan website) ================= --}}
<section id="website" class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="rounded-3xl bg-gradient-to-r from-brand-600 to-brand-800 
                    text-white p-8 sm:p-12 shadow-soft">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">

                <!-- LEFT CONTENT -->
                <div class="max-w-2xl">

                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">
                        Jasa Pembuatan Website Profesional
                    </h2>

                    <p class="text-white/80 mb-6">
                        Tidak hanya hosting & domain, kami juga menyediakan layanan pembuatan website:
                    </p>

                    <!-- CHECKLIST -->
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="text-green-300 text-lg">✔</span>
                            <span>Company Profile untuk memperkuat branding bisnis Anda</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="text-green-300 text-lg">✔</span>
                            <span>Toko Online / E-Commerce untuk memaksimalkan penjualan digital</span>
                        </li>

                        <li class="flex items-start gap-3">
                            <span class="text-green-300 text-lg">✔</span>
                            <span>Sistem Custom sesuai kebutuhan perusahaan Anda</span>
                        </li>
                    </ul>

                    <!-- LINK -->
                    <a href="{{ url('/#contact') }}"
                    class="inline-flex items-center gap-2 font-semibold text-white hover:underline">
                        Pelajari lebih lanjut tentang kami
                        <span>→</span>
                    </a>

                </div>


                <!-- RIGHT BUTTON AREA -->
                <div class="flex flex-col sm:flex-row gap-4 lg:items-center">

                    <a href="{{ url('/#cek-domain') }}"
                    class="px-6 py-3 rounded-xl bg-white text-brand-700 font-semibold text-center hover:bg-brand-50 transition">
                        Cari Domain
                    </a>

                    <a href="{{ url('/#contact') }}"
                    class="px-6 py-3 rounded-xl bg-white/10 border border-white/25 font-semibold text-center hover:bg-white/15 transition">
                        Hubungi Kami
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>


{{-- ================= SECTION: SERVICES ================= --}}

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

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-10">

            <!-- 1 -->
            <div data-aos="fade-up"
                class="group bg-white p-10 rounded-3xl shadow-lg border border-blue-100
                        hover:shadow-2xl hover:-translate-y-4
                        transition-all duration-500">

                <div class="w-16 h-16 flex items-center justify-center 
                            bg-blue-600 text-white rounded-2xl mb-6
                            group-hover:scale-110 group-hover:rotate-6
                            transition duration-500 text-2xl">
                    🛠
                </div>

                <h3 class="text-2xl font-bold text-slate-800 mb-4">
                    Memperbaiki Semua Website
                </h3>

                <p class="text-slate-600 leading-relaxed">
                    Kami membantu memperbaiki error, bug, tampilan rusak, dan berbagai masalah teknis 
                    agar website Anda kembali berjalan normal dan optimal.
                </p>
                <a href="/service/memperbaiki"
                class="inline-block mt-6 bg-blue-600 text-white px-5 py-2 rounded-xl hover:bg-blue-700 transition">
                Pesan Sekarang
                </a>

            </div>


            <!-- 2 -->
            <div data-aos="fade-up" data-aos-delay="150"
                class="group bg-white p-10 rounded-3xl shadow-lg border border-blue-100
                        hover:shadow-2xl hover:-translate-y-4
                        transition-all duration-500">

                <div class="w-16 h-16 flex items-center justify-center 
                            bg-indigo-600 text-white rounded-2xl mb-6
                            group-hover:scale-110 group-hover:rotate-6
                            transition duration-500 text-2xl">
                    ➕
                </div>

                <h3 class="text-2xl font-bold text-slate-800 mb-4">
                    Menambah Fitur Website
                </h3>

                <p class="text-slate-600 leading-relaxed">
                    Ingin menambahkan fitur baru seperti dashboard admin, sistem login, 
                    pembayaran online, atau integrasi API? Kami siap mengembangkan sesuai kebutuhan Anda.
                </p>
                <a href="/service/memperbaiki"
                class="inline-block mt-6 bg-blue-600 text-white px-5 py-2 rounded-xl hover:bg-blue-700 transition">
                Pesan Sekarang
                </a>


            </div>


            <!-- 3 -->
            <div data-aos="fade-up" data-aos-delay="300"
                class="group bg-white p-10 rounded-3xl shadow-lg border border-blue-100
                        hover:shadow-2xl hover:-translate-y-4
                        transition-all duration-500">

                <div class="w-16 h-16 flex items-center justify-center 
                            bg-emerald-600 text-white rounded-2xl mb-6
                            group-hover:scale-110 group-hover:rotate-6
                            transition duration-500 text-2xl">
                    🔍
                </div>

                <h3 class="text-2xl font-bold text-slate-800 mb-4">
                    Mengecek & Audit Website
                </h3>

                <p class="text-slate-600 leading-relaxed">
                    Kami melakukan pengecekan keamanan, performa, dan stabilitas website 
                    untuk memastikan semuanya berjalan dengan aman dan optimal.
                </p>

                <a href="/service/memperbaiki"
                class="inline-block mt-6 bg-blue-600 text-white px-5 py-2 rounded-xl hover:bg-blue-700 transition">
                Pesan Sekarang
                </a>

            </div>

        </div>
    </div>
</section>


{{-- ================= SECTION: CONTACT CTA  ================= --}}
<section id="contact" class="w-full bg-blue-800 py-20 text-white">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-12">

        <!-- LEFT SIDE -->
        <div class="w-full md:w-1/2">

            <!-- JUDUL -->
            <h2 class="text-4xl font-extrabold mb-4 text-center md:text-left">
                Dukungan Teknis 24/7 🚀
            </h2>

            <!-- KOTAK DESKRIPSI -->
            <div class="bg-blue-700/50 border border-blue-400 rounded-2xl p-6 mb-8">
                <p class="text-blue-100">
                    Mau tanya hosting, domain, atau jasa pembuatan website?
                    Tim support kami selalu tersedia untuk memastikan layanan Anda berjalan lancar tanpa hambatan 💙
                </p>
            </div>

            <!-- ICON DI BAWAH KOTAK -->
            <div class="flex gap-6 justify-center md:justify-start">

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
        </div>

        <!-- RIGHT SIDE IMAGE -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="{{ asset('img/kontak.png') }}"
                alt="Customer Support"
                class="w-full max-w-md">
        </div>

    </div>
</section>

{{-- ================= SECTION: testimoni  ================= --}}


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
