<footer class="mt-16 bg-gradient-to-b from-[#0B2A6F] to-[#081E4D] text-white">
    <div class="max-w-6xl mx-auto px-4 py-12 grid md:grid-cols-4 gap-10">

        {{-- brand --}}
        <div>
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/logo.png') }}" alt="PabrikOnline" class="h-9 w-auto bg-white/90 rounded-xl p-1">
            </div>

            <p class="mt-4 text-sm text-white/80">
                Hosting, domain, & jasa website yang modern, cepat, dan rapi. Nuansanya clean & profesional 💙
            </p>
        </div>

        {{-- layanan --}}
        <div>
            <div class="font-extrabold mb-3">LAYANAN</div>
            <ul class="text-sm text-white/80 space-y-2">
                <li><a class="hover:text-white" href="/domain">Domain</a></li>
                <li><a class="hover:text-white" href="/hosting">Hosting</a></li>
                <li><a class="hover:text-white" href="/website">Jasa Website</a></li>
            </ul>
        </div>

        {{-- tentang --}}
        <div>
            <div class="font-extrabold mb-3">TENTANG</div>
            <ul class="text-sm text-white/80 space-y-2">
                <li><a class="hover:text-white" href="/contact">Kontak</a></li>
                <li><span class="text-white/70">Kebijakan</span></li>
                <li><span class="text-white/70">FAQ</span></li>
            </ul>
        </div>

        {{-- info --}}
        <div>
            <div class="font-extrabold mb-3">INFORMASI</div>
            <div class="text-sm text-white/80 space-y-2">
                <div>cs@pabrikonline.id</div>
                <div> +6281335277477</div>
                
                <a href="https://wa.me/6281335277477?text=Halo%20saya%20ingin%20pesan%20Hosting%2050GB"
                    target="_blank"
                <div class="inline-flex items-center gap-2 rounded-xl bg-white/10 border border-white/14 px-1 py-0 font-semibold hover:bg-white/14">
                    💬 Chat Support
                </div>
            </div>
        </div>

    </div>

    <div class="text-center text-xs text-white/70 pb-6">
        © {{ date('Y') }} PabrikOnline. All rights reserved.
    </div>
</footer>
