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

            {{-- Form — pakai mailto, tidak POST ke server --}}
            <div class="space-y-5">

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="f_name"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="Masukkan nama lengkap Anda">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="f_email"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="contoh@email.com">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Nomor HP / WhatsApp
                    </label>
                    <input type="text" id="f_phone"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="Contoh: 08123456789">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Ceritakan Kebutuhan Anda <span class="text-red-500">*</span>
                    </label>
                    <textarea id="f_message" rows="5"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="Jelaskan detail masalah atau fitur yang diinginkan..."></textarea>
                </div>

                {{-- Peringatan validasi --}}
                <div id="f_error" class="hidden p-4 bg-red-50 border border-red-200 rounded-2xl text-red-600 text-sm font-semibold">
                    ⚠️ Nama, Email, dan Pesan wajib diisi!
                </div>

                <button onclick="kirimEmail()"
                    class="w-full bg-blue-600 hover:bg-blue-700 active:scale-95 text-white font-bold py-3 rounded-xl shadow-lg transition-all duration-300">
                    Kirim Permintaan 🚀
                </button>

            </div>

            <p class="mt-6 text-center text-xs text-slate-400">
                Atau hubungi langsung via
                <a href="https://wa.me/6281335277477" target="_blank" class="text-green-600 font-semibold hover:underline">WhatsApp</a>
            </p>

        </div>
    </div>
</section>

{{-- Script mailto --}}
<script>
function kirimEmail() {
    const nama    = document.getElementById('f_name').value.trim();
    const email   = document.getElementById('f_email').value.trim();
    const phone   = document.getElementById('f_phone').value.trim();
    const pesan   = document.getElementById('f_message').value.trim();
    const service = "{{ $service->name }}";
    const errBox  = document.getElementById('f_error');

    // Validasi sederhana
    if (!nama || !email || !pesan) {
        errBox.classList.remove('hidden');
        return;
    }

    errBox.classList.add('hidden');

    // Susun isi email
    const subject = encodeURIComponent('Permintaan Layanan: ' + service);
    const body    = encodeURIComponent(
        'Halo, saya ingin memesan layanan ' + service + '.\n\n' +
        'Nama    : ' + nama + '\n' +
        'Email   : ' + email + '\n' +
        'WhatsApp: ' + (phone || '-') + '\n\n' +
        'Detail Kebutuhan:\n' + pesan
    );

    // Buka aplikasi email
    window.location.href = 'mailto:nihayamaulidiyah22@gmail.com?subject=' + subject + '&body=' + body;
}
</script>

@endsection
