@extends('frontend.layouts.main')

@section('content')

{{-- ================= HOSTING: PRICELIST ================= --}}
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Title --}}
        <div class="text-center mb-14">
            <h1 class="text-4xl font-extrabold text-slate-800">
                Paket <span class="text-blue-600">Hosting</span> Fleksibel
            </h1>
            <p class="mt-4 text-slate-600 max-w-xl mx-auto">
                Sesuai kebutuhan Anda, mulai dari personal hingga enterprise.
                Server Indonesia & Singapura.
            </p>
        </div>

        {{-- Grid Paket --}}
        <div class="grid md:grid-cols-3 gap-8">

            <!-- Paket 1 -->
            <div class="bg-white rounded-xl shadow p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-2">BIG Disk 50GB</h3>
                <p class="text-gray-500 mb-4">Server Indonesia / Singapura</p>
                <p class="text-gray-500 mb-4"><i>Hanya</i></p>
                <p class="text-3xl font-bold mb-6">Rp50.000,-/bulan</p>
                <ul class="text-sm text-slate-600 space-y-2 mb-6">
                    <li>✅ 50GB SSD Storage</li>
                    <li>✅ Unlimited Bandwidth</li>
                    <li>✅ 1 Domain Gratis</li>
                    <li>✅ SSL Certificate</li>
                    <li>✅ cPanel Control Panel</li>
                </ul>
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Hosting%2050GB"
                    target="_blank"
                    class="block bg-blue-600 text-white px-6 py-3 rounded-lg text-center hover:bg-blue-700 transition">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Paket 2 (Featured) -->
            <div class="bg-blue-600 text-white rounded-xl shadow-2xl p-8 transform scale-105 hover:scale-110 transition-all duration-300">
                <div class="inline-block bg-white text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-3">
                    POPULER
                </div>
                <h3 class="text-xl font-semibold mb-2">Unlimited Disk</h3>
                <p class="text-blue-200 mb-4">Server Indonesia / Singapura</p>
                <p class="text-blue-200 mb-4"><i>Hanya</i></p>
                <p class="text-3xl font-bold mb-6">Rp100.000,-/bulan</p>
                <ul class="text-sm text-blue-100 space-y-2 mb-6">
                    <li>✅ Unlimited SSD Storage</li>
                    <li>✅ Unlimited Bandwidth</li>
                    <li>✅ Unlimited Domain</li>
                    <li>✅ SSL Certificate Gratis</li>
                    <li>✅ Email Hosting</li>
                    <li>✅ cPanel Control Panel</li>
                </ul>
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Hosting%20Unlimited"
                target="_blank"
                class="block bg-white text-blue-600 font-bold px-6 py-3 rounded-lg text-center hover:bg-blue-50 transition">
                    Pesan Sekarang
                </a>
            </div>

            <!-- Paket 3 -->
            <div class="bg-white rounded-xl shadow p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <h3 class="text-xl font-semibold mb-2">Jasa Pembuatan Website</h3>
                <p class="text-gray-500 mb-4">Company Profile hingga Custom Apps</p>
                <p class="text-gray-500 mb-4"><i>mulai</i></p>
                <p class="text-3xl font-bold mb-6">Rp1.500.000,-/website</p>
                <ul class="text-sm text-slate-600 space-y-2 mb-6">
                    <li>✅ Desain Profesional</li>
                    <li>✅ Responsif Mobile</li>
                    <li>✅ SEO Friendly</li>
                    <li>✅ Hosting 1 Tahun Gratis</li>
                    <li>✅ Domain .com 1 Tahun</li>
                </ul>
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Jasa%20Pembuatan%20Website"
                target="_blank"
                class="block bg-blue-600 text-white px-6 py-3 rounded-lg text-center hover:bg-blue-700 transition">
                    Pesan Sekarang
                </a>
            </div>

        </div>

        {{-- CTA Konsultasi --}}
        <div class="mt-16 text-center bg-white rounded-3xl border border-blue-100 shadow p-10">
            <h3 class="text-2xl font-bold text-slate-800 mb-3">Tidak yakin paket mana yang tepat?</h3>
            <p class="text-slate-600 mb-6">Konsultasikan kebutuhan Anda dengan tim kami secara gratis.</p>
            <a href="https://wa.me/6281335277477?text=Halo%2C+saya+ingin+konsultasi+paket+hosting"
               target="_blank"
               class="inline-block px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 to-blue-800
                      text-white font-bold text-lg shadow-xl hover:opacity-90 transition">
                💬 Konsultasi Gratis via WhatsApp
            </a>
        </div>

    </div>
</section>

@endsection
