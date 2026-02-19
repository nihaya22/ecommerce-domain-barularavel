@extends('frontend.layouts.main')

@section('content')

{{-- ================= SECTION: CEK DOMAIN ================= --}}
<section class="relative bg-gradient-to-br from-blue-50 to-white py-16">

    {{-- Blur Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-28 -left-28 h-96 w-96 rounded-full bg-blue-300/40 blur-3xl"></div>
        <div class="absolute -bottom-32 -right-28 h-[28rem] w-[28rem] rounded-full bg-blue-400/30 blur-3xl"></div>
        <div class="absolute top-20 right-20 h-72 w-72 rounded-full bg-white/40 blur-3xl"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4
                grid md:grid-cols-2 gap-12 items-center">

        {{-- LEFT : FORM --}}
        <div id="cek-domain" class="relative">

            <div class="rounded-[2rem] bg-white/90 border border-blue-100
                        shadow-[0_30px_80px_rgba(37,99,235,0.25)] p-6">

                <div class="font-extrabold text-slate-900 text-lg">
                    Cari domain dulu 💙
                </div>

                <p class="text-sm text-slate-600 mt-1">
                    Ketik nama brand kamu, nanti kita cek ketersediaan.
                </p>

                <form class="mt-5 flex flex-col sm:flex-row gap-3">

                    <input
                        type="text"
                        name="domain"
                        placeholder="contoh: tokobuah"
                        class="flex-1 px-4 py-3 rounded-xl border border-blue-100
                               focus:outline-none focus:ring-2 focus:ring-blue-300"
                    >

                    <select
                        id="tldSelect"
                        name="tld"
                        class="w-full sm:w-40 px-4 py-3 rounded-xl border border-blue-100
                               bg-white focus:outline-none focus:ring-2 focus:ring-blue-300"
                    >
                        <optgroup label="Domain Umum (Global)">
                            <option value=".com">.com</option>
                            <option value=".net">.net</option>
                            <option value=".org">.org</option>
                            <option value=".info">.info</option>
                            <option value=".biz">.biz</option>
                            <option value=".online">.online</option>
                            <option value=".site">.site</option>
                            <option value=".website">.website</option>
                            <option value=".app">.app</option>
                            <option value=".tech">.tech</option>
                            <option value=".store">.store</option>
                            <option value=".blog">.blog</option>
                            <option value=".digital">.digital</option>
                            <option value=".cloud">.cloud</option>
                            <option value=".xyz">.xyz</option>
                        </optgroup>
                        <optgroup label="Domain Bisnis & Profesional">
                            <option value=".company">.company</option>
                            <option value=".business">.business</option>
                            <option value=".solutions">.solutions</option>
                            <option value=".services">.services</option>
                            <option value=".agency">.agency</option>
                            <option value=".studio">.studio</option>
                            <option value=".consulting">.consulting</option>
                            <option value=".group">.group</option>
                            <option value=".global">.global</option>
                        </optgroup>
                        <optgroup label="Domain Toko & E-Commerce">
                            <option value=".shop">.shop</option>
                            <option value=".market">.market</option>
                            <option value=".mart">.mart</option>
                            <option value=".sale">.sale</option>
                            <option value=".deals">.deals</option>
                        </optgroup>
                        <optgroup label="Domain Indonesia">
                            <option value=".id" selected>.id</option>
                            <option value=".co.id">.co.id</option>
                            <option value=".or.id">.or.id</option>
                            <option value=".sch.id">.sch.id</option>
                            <option value=".ac.id">.ac.id</option>
                            <option value=".go.id">.go.id</option>
                            <option value=".desa.id">.desa.id</option>
                            <option value=".my.id">.my.id</option>
                            <option value=".biz.id">.biz.id</option>
                            <option value=".web.id">.web.id</option>
                        </optgroup>
                        <optgroup label="Domain Negara">
                            <option value=".us">.us</option>
                            <option value=".uk">.uk</option>
                            <option value=".au">.au</option>
                            <option value=".sg">.sg</option>
                            <option value=".jp">.jp</option>
                            <option value=".my">.my</option>
                            <option value=".de">.de</option>
                            <option value=".fr">.fr</option>
                        </optgroup>
                    </select>

                    <button
                        type="submit"
                        class="w-full sm:w-28 px-6 py-3 rounded-xl
                               bg-blue-600 text-white font-semibold
                               hover:bg-blue-700 transition shadow-md"
                    >
                        Cari
                    </button>

                </form>
            </div>

            {{-- Glow Decoration --}}
            <div class="absolute -z-10 -bottom-10 -left-10 h-36 w-36 rounded-3xl bg-blue-300/40 blur-2xl"></div>
            <div class="absolute -z-10 -top-10 -right-10 h-36 w-36 rounded-3xl bg-blue-400/30 blur-2xl"></div>

        </div>

        {{-- RIGHT : IMAGE --}}
        <div class="flex justify-center md:-translate-y-8">
            <img
                src="{{ asset('img/fikir.png') }}"
                alt="Ilustrasi Domain"
                class="w-full max-w-xl mix-blend-multiply opacity-95
                       drop-shadow-[0_30px_80px_rgba(37,99,235,0.25)]"
            />
        </div>

    </div>
</section>


{{-- ================= SECTION: DAFTAR DOMAIN TERSEDIA ================= --}}
<section class="py-20 bg-gradient-to-b from-white to-blue-50">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Title --}}
        <div class="text-center mb-14" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-slate-800">
                Domain Premium <span class="text-blue-600">Tersedia</span>
            </h2>
            <p class="mt-4 text-slate-600 max-w-xl mx-auto">
                Berikut daftar domain pilihan yang siap untuk Anda miliki. Klik untuk melihat detail dan harga.
            </p>
        </div>

        {{-- Domain Cards --}}
        @if($domains->isEmpty())
            <div class="text-center py-20 bg-white rounded-3xl border border-blue-100 shadow-sm">
                <div class="text-6xl mb-4">🌐</div>
                <p class="text-slate-600 text-lg font-semibold">Belum ada domain yang tersedia saat ini.</p>
                <p class="text-slate-400 text-sm mt-2">Silakan hubungi kami untuk request domain khusus.</p>
                <a href="https://wa.me/6281335277477?text=Halo%2C+saya+ingin+request+domain+khusus"
                   target="_blank"
                   class="inline-block mt-6 px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                    💬 Hubungi via WhatsApp
                </a>
            </div>
        @else
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($domains as $index => $domain)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 100 }}"
                         class="group bg-white rounded-3xl border border-blue-100 shadow-lg p-7
                                hover:shadow-2xl hover:-translate-y-2 transition-all duration-400">

                        {{-- Icon & Badge --}}
                        <div class="flex items-start justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-blue-600 text-white
                                        flex items-center justify-center text-xl
                                        group-hover:scale-110 transition duration-300">
                                🌐
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full
                                         text-xs font-semibold bg-green-50 text-green-700 border border-green-200">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                Tersedia
                            </span>
                        </div>

                        {{-- Nama Domain --}}
                        <h3 class="text-xl font-extrabold text-slate-800 break-words">
                            {{ $domain->name }}
                        </h3>

                        @if($domain->description)
                            <p class="text-sm text-slate-500 mt-2 leading-relaxed line-clamp-2">
                                {{ $domain->description }}
                            </p>
                        @endif

                        {{-- Harga --}}
                        <div class="mt-5 pt-4 border-t border-blue-50">
                            <p class="text-xs text-slate-400 uppercase font-semibold tracking-wide">Harga</p>
                            <p class="text-2xl font-extrabold text-slate-900 mt-1">
                                Rp {{ number_format($domain->price, 0, ',', '.') }}
                                <span class="text-sm font-normal text-slate-400">/tahun</span>
                            </p>
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="mt-5 flex gap-3">
                            <a href="{{ route('domain.show', $domain->slug) }}"
                               class="flex-1 text-center px-4 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700
                                      text-white font-semibold text-sm transition">
                                Detail
                            </a>
                            <a href="https://wa.me/6281335277477?text=Halo%2C+saya+tertarik+membeli+domain+{{ urlencode($domain->name) }}+seharga+Rp{{ number_format($domain->price, 0, '', '') }}"
                               target="_blank"
                               class="flex-1 text-center px-4 py-2.5 rounded-xl bg-green-500 hover:bg-green-600
                                      text-white font-semibold text-sm transition">
                                Beli
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- CTA bawah --}}
            <div class="mt-14 text-center">
                <p class="text-slate-600 mb-5">Tidak menemukan domain yang diinginkan?</p>
                <a href="https://wa.me/6281335277477?text=Halo%2C+saya+ingin+request+domain+khusus"
                   target="_blank"
                   class="inline-block px-8 py-4 rounded-2xl
                          bg-gradient-to-r from-blue-600 to-blue-800
                          text-white font-bold text-lg shadow-xl hover:opacity-90 transition">
                    💬 Request Domain via WhatsApp
                </a>
            </div>
        @endif

    </div>
</section>

@endsection
