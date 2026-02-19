@extends('frontend.layouts.main')

@section('content')

<!--------------------------- 3.cari domain ----------------------------------->

    {{-- Blur Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-28 -left-28 h-96 w-96 rounded-full bg-blue-300/40 blur-3xl"></div>
        <div class="absolute -bottom-32 -right-28 h-[28rem] w-[28rem] rounded-full bg-blue-400/30 blur-3xl"></div>
        <div class="absolute top-20 right-20 h-72 w-72 rounded-full bg-white/40 blur-3xl"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 py-16 
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
                            <option value=".store">.store</option>
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
                class="w-full max-w-xl
                       mix-blend-multiply opacity-95
                       drop-shadow-[0_30px_80px_rgba(37,99,235,0.25)]"
            />
        </div>

    </div>

</section>


@endsection
