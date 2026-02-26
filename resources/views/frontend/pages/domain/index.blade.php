@extends('frontend.layouts.main')

@section('content')

{{-- ================= SECTION: CEK DOMAIN ================= --}}
<section class="relative bg-gradient-to-br from-blue-50 to-white py-16">

    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-28 -left-28 h-96 w-96 rounded-full bg-blue-300/40 blur-3xl"></div>
        <div class="absolute -bottom-32 -right-28 h-[28rem] w-[28rem] rounded-full bg-blue-400/30 blur-3xl"></div>
        <div class="absolute top-20 right-20 h-72 w-72 rounded-full bg-white/40 blur-3xl"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">

        {{-- LEFT : FORM --}}
        <div id="cek-domain">
            <div class="rounded-[2rem] bg-white/90 border border-blue-100
                        shadow-[0_30px_80px_rgba(37,99,235,0.25)] p-6">

                <div class="font-extrabold text-slate-900 text-lg">Cari domain dulu 💙</div>
                <p class="text-sm text-slate-600 mt-1">Ketik nama brand kamu, nanti kita cek ketersediaan.</p>

                <div class="mt-5 flex flex-col sm:flex-row gap-3">
                    <input
                        type="text"
                        id="searchKeyword"
                        placeholder="contoh: tokobuah"
                        class="flex-1 px-4 py-3 rounded-xl border border-blue-100
                               focus:outline-none focus:ring-2 focus:ring-blue-300"
                    >

                    <select
                        id="tldSelect"
                        class="w-full sm:w-40 px-4 py-3 rounded-xl border border-blue-100
                               bg-white focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <option value="">Semua</option>
                        @php $grouped = $extensions->groupBy('category'); @endphp
                        @foreach($grouped as $category => $items)
                            <optgroup label="{{ $category }}">
                                @foreach($items as $ext)
                                    <option value="{{ $ext->extension }}">{{ $ext->extension }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>

                    <button onclick="filterDomains()"
                            class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold transition">
                        Cari
                    </button>
                </div>

                {{-- Hasil pencarian --}}
                <div id="searchResult" class="mt-4 hidden">
                    <div class="text-sm font-semibold text-slate-600 mb-2">Hasil pencarian:</div>
                    <div id="resultList" class="space-y-2 max-h-64 overflow-y-auto"></div>
                </div>
            </div>
        </div>

        {{-- RIGHT : IMAGE --}}
        <div class="flex justify-center md:-translate-y-8">
            <img src="{{ asset('img/fikir.png') }}" alt="Ilustrasi Domain"
                 class="w-full max-w-xl mix-blend-multiply opacity-95
                        drop-shadow-[0_30px_80px_rgba(37,99,235,0.25)]">
        </div>
    </div>
</section>


{{-- ================= SECTION: DAFTAR DOMAIN TERSEDIA ================= --}}
<section class="py-20 bg-gradient-to-b from-white to-blue-50">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14" data-aos="fade-down">
            <h2 class="text-4xl font-extrabold text-slate-800">
                Domain Premium <span class="text-blue-600">Tersedia</span>
            </h2>
            <p class="mt-4 text-slate-600 max-w-xl mx-auto">
                Berikut daftar domain pilihan yang siap untuk Anda miliki. Klik untuk melihat detail dan harga.
            </p>
        </div>

        {{-- Filter Kategori --}}
        <div class="flex flex-wrap gap-2 justify-center mb-10" id="categoryFilter">
            <button onclick="filterCategory('semua')"
                    class="category-btn active px-4 py-2 rounded-full text-sm font-semibold border border-blue-200
                           bg-blue-600 text-white transition">
                Semua
            </button>
            <button onclick="filterCategory('indonesia')"
                    class="category-btn px-4 py-2 rounded-full text-sm font-semibold border border-blue-200
                           bg-white text-slate-600 hover:bg-blue-50 transition">
                🇮🇩 Indonesia
            </button>
            <button onclick="filterCategory('bisnis')"
                    class="category-btn px-4 py-2 rounded-full text-sm font-semibold border border-blue-200
                           bg-white text-slate-600 hover:bg-blue-50 transition">
                🏢 Bisnis
            </button>
            <button onclick="filterCategory('toko')"
                    class="category-btn px-4 py-2 rounded-full text-sm font-semibold border border-blue-200
                           bg-white text-slate-600 hover:bg-blue-50 transition">
                🛒 Toko
            </button>
            <button onclick="filterCategory('global')"
                    class="category-btn px-4 py-2 rounded-full text-sm font-semibold border border-blue-200
                           bg-white text-slate-600 hover:bg-blue-50 transition">
                🌐 Global
            </button>
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
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="domainGrid">
                @foreach($domains as $index => $domain)
                    @php
                        $name = $domain->name;
                        $cat = 'global';
                        if (str_contains($name, '.id') || str_contains($name, '.co.id') || str_contains($name, '.my.id') || str_contains($name, '.web.id') || str_contains($name, '.biz.id') || str_contains($name, '.go.id') || str_contains($name, '.desa.id') || str_contains($name, '.ac.id') || str_contains($name, '.sch.id') || str_contains($name, '.or.id')) {
                            $cat = 'indonesia';
                        } elseif (in_array($name, ['.shop', '.store', '.market', '.mart', '.sale', '.deals'])) {
                            $cat = 'toko';
                        } elseif (in_array($name, ['.company', '.business', '.solutions', '.services', '.agency', '.studio', '.consulting', '.group', '.global'])) {
                            $cat = 'bisnis';
                        }
                    @endphp
                    <div data-aos="fade-up" data-aos-delay="{{ ($index % 6) * 100 }}"
                         data-category="{{ $cat }}"
                         data-name="{{ $domain->name }}"
                         class="domain-card group bg-white rounded-3xl border border-blue-100 shadow-lg p-7
                                hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">

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

                        <h3 class="text-xl font-extrabold text-slate-800 break-words">
                            {{ $domain->name }}
                        </h3>

                        @if($domain->description)
                            <p class="text-sm text-slate-500 mt-2 leading-relaxed line-clamp-2">
                                {{ $domain->description }}
                            </p>
                        @endif

                        <div class="mt-5 pt-4 border-t border-blue-50">
                            <p class="text-xs text-slate-400 uppercase font-semibold tracking-wide">Harga</p>
                            <p class="text-2xl font-extrabold text-slate-900 mt-1">
                                Rp {{ number_format($domain->price, 0, ',', '.') }}
                                <span class="text-sm font-normal text-slate-400">/tahun</span>
                            </p>
                        </div>

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

            <div class="mt-4 text-center text-sm text-slate-400" id="noResult" style="display:none">
                Tidak ada domain yang cocok dengan pencarian kamu.
            </div>

            <div class="mt-14 text-center">
                <p class="text-slate-600 mb-5">Tidak menemukan domain yang diinginkan?</p>
                <a href="https://wa.me/6281335277477?text=Halo%2C+saya+ingin+request+domain+khusus"
                   target="_blank"
                   class="inline-block px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 to-blue-800
                          text-white font-bold text-lg shadow-xl hover:opacity-90 transition">
                    💬 Request Domain via WhatsApp
                </a>
            </div>
        @endif

    </div>
</section>

<script>
// ======= FILTER KATEGORI =======
function filterCategory(cat) {
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.classList.remove('bg-blue-600', 'text-white');
        btn.classList.add('bg-white', 'text-slate-600');
    });
    event.target.classList.add('bg-blue-600', 'text-white');
    event.target.classList.remove('bg-white', 'text-slate-600');

    const cards = document.querySelectorAll('.domain-card');
    let visible = 0;
    cards.forEach(card => {
        if (cat === 'semua' || card.dataset.category === cat) {
            card.style.display = '';
            visible++;
        } else {
            card.style.display = 'none';
        }
    });
    document.getElementById('noResult').style.display = visible === 0 ? 'block' : 'none';
}

// ======= PENCARIAN =======
function filterDomains() {
    const keyword = document.getElementById('searchKeyword').value.toLowerCase().trim();
    const tld = document.getElementById('tldSelect').value.toLowerCase();

    if (!keyword && !tld) return;

    const cards = document.querySelectorAll('.domain-card');
    let results = [];

    cards.forEach(card => {
        const name = card.dataset.name.toLowerCase();
        const matchKeyword = !keyword || name.includes(keyword);
        const matchTld = !tld || name === tld || name.endsWith(tld);

        if (matchKeyword || matchTld) {
            results.push(card.dataset.name);
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });

    // Scroll ke grid
    document.getElementById('domainGrid')?.scrollIntoView({ behavior: 'smooth', block: 'start' });

    // Tampilkan hasil di kotak pencarian
    const resultBox = document.getElementById('searchResult');
    const resultList = document.getElementById('resultList');

    if (keyword) {
        resultBox.classList.remove('hidden');
        if (results.length === 0) {
            resultList.innerHTML = `<div class="text-sm text-slate-400 py-2">Tidak ada domain yang cocok.</div>`;
        } else {
            resultList.innerHTML = results.slice(0, 8).map(name => `
                <div class="flex items-center justify-between px-3 py-2 rounded-xl bg-blue-50 border border-blue-100">
                    <span class="font-semibold text-slate-800">${keyword}<span class="text-blue-600">${name}</span></span>
                    <span class="text-xs text-green-600 font-bold">✓ Tersedia</span>
                </div>
            `).join('');
        }
    } else {
        resultBox.classList.add('hidden');
    }

    document.getElementById('noResult').style.display = results.length === 0 ? 'block' : 'none';
}

// Enter key untuk search
document.getElementById('searchKeyword')?.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') filterDomains();
});
</script>

@endsection