@extends('frontend.layouts.main')

@section('content')

{{-- ================= WEBSITE: JASA PEMBUATAN WEBSITE ================= --}}
<section class="py-16 min-h-screen">
    <div class="max-w-6xl mx-auto px-4">

        {{-- Title --}}
        <div class="text-center mb-14">
            <h1 class="text-4xl font-extrabold text-slate-800">
                Jasa Pembuatan <span class="text-blue-600">Website</span> Profesional
            </h1>
            <p class="mt-4 text-slate-600 max-w-2xl mx-auto">
                Tidak hanya hosting & domain, kami juga menyediakan layanan pembuatan website
                yang profesional, modern, dan responsif untuk semua kebutuhan bisnis Anda.
            </p>
        </div>

        {{-- CTA Banner --}}
        <div class="rounded-3xl bg-gradient-to-r from-brand-600 to-brand-800
                    text-white p-8 sm:p-12 shadow-soft mb-16">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">

                <!-- LEFT CONTENT -->
                <div class="max-w-2xl">

                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">
                        Solusi Website untuk Bisnis Anda
                    </h2>

                    <p class="text-white/80 mb-6">
                        Kami menyediakan layanan pembuatan website:
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
                    <a href="{{ route('contact.index') }}"
                    class="inline-flex items-center gap-2 font-semibold text-white hover:underline">
                        Pelajari lebih lanjut tentang kami
                        <span>→</span>
                    </a>

                </div>

                <!-- RIGHT BUTTON AREA -->
                <div class="flex flex-col sm:flex-row gap-4 lg:items-center">

                    <a href="{{ route('domain.index') }}"
                    class="px-6 py-3 rounded-xl bg-white text-brand-700 font-semibold text-center hover:bg-brand-50 transition">
                        Cari Domain
                    </a>

                    <a href="{{ route('contact.index') }}"
                    class="px-6 py-3 rounded-xl bg-white/10 border border-white/25 font-semibold text-center hover:bg-white/15 transition">
                        Hubungi Kami
                    </a>

                </div>

            </div>
        </div>

        {{-- Paket Website --}}
        <h2 class="text-3xl font-extrabold text-slate-800 text-center mb-10">
            Pilih <span class="text-blue-600">Paket Website</span> Anda
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Paket Company Profile -->
            <div class="bg-white rounded-3xl border border-blue-100 shadow-lg p-8 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl mb-6">
                    🏢
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Company Profile</h3>
                <p class="text-slate-500 text-sm mb-4">Tampilkan bisnis Anda secara profesional di dunia digital.</p>
                <p class="text-3xl font-extrabold text-blue-600 mb-6">
                    Rp1.500.000
                    <span class="text-sm font-normal text-slate-400">/website</span>
                </p>
                <ul class="text-sm text-slate-600 space-y-2 mb-8">
                    <li>✅ Desain Modern & Responsif</li>
                    <li>✅ Hingga 10 Halaman</li>
                    <li>✅ Form Kontak</li>
                    <li>✅ SEO Dasar</li>
                    <li>✅ Hosting 1 Tahun</li>
                </ul>
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20website%20Company%20Profile"
                   target="_blank"
                   class="block text-center px-6 py-3 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-700 transition">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Paket E-Commerce (Featured) -->
            <div class="bg-blue-600 text-white rounded-3xl shadow-2xl p-8 transform scale-105 hover:scale-110 transition-all duration-300">
                <div class="inline-block bg-white text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-3">
                    TERPOPULER
                </div>
                <div class="w-14 h-14 rounded-2xl bg-blue-500 flex items-center justify-center text-2xl mb-4">
                    🛒
                </div>
                <h3 class="text-xl font-bold mb-3">Toko Online</h3>
                <p class="text-blue-200 text-sm mb-4">Jual produk Anda secara online dengan sistem yang lengkap.</p>
                <p class="text-3xl font-extrabold mb-6">
                    Rp3.500.000
                    <span class="text-sm font-normal text-blue-200">/website</span>
                </p>
                <ul class="text-sm text-blue-100 space-y-2 mb-8">
                    <li>✅ Manajemen Produk</li>
                    <li>✅ Keranjang Belanja</li>
                    <li>✅ Integrasi Pembayaran</li>
                    <li>✅ Dashboard Admin</li>
                    <li>✅ Hosting 1 Tahun Gratis</li>
                </ul>
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20website%20Toko%20Online"
                   target="_blank"
                   class="block text-center px-6 py-3 rounded-xl bg-white text-blue-600 font-bold hover:bg-blue-50 transition">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Paket Custom -->
            <div class="bg-white rounded-3xl border border-blue-100 shadow-lg p-8 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 rounded-2xl bg-purple-100 flex items-center justify-center text-2xl mb-6">
                    ⚙️
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Sistem Custom</h3>
                <p class="text-slate-500 text-sm mb-4">Aplikasi web sesuai kebutuhan unik bisnis Anda.</p>
                <p class="text-3xl font-extrabold text-blue-600 mb-6">
                    Hubungi Kami
                </p>
                <ul class="text-sm text-slate-600 space-y-2 mb-8">
                    <li>✅ Analisa Kebutuhan</li>
                    <li>✅ Desain UI/UX Custom</li>
                    <li>✅ Pengembangan Backend</li>
                    <li>✅ Integrasi API</li>
                    <li>✅ Maintenance & Support</li>
                </ul>
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20konsultasi%20Sistem%20Custom"
                   target="_blank"
                   class="block text-center px-6 py-3 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-700 transition">
                    Konsultasi Dulu
                </a>
            </div>

        </div>

    </div>
</section>

@endsection
