<!DOCTYPE html>
<html>
<head>
    <title>Pesan Layanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen relative flex items-center justify-center">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('img/b service.jpg') }}"
            class="w-full h-full object-cover">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-blue-900/40 backdrop-blur-sm"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-2xl w-full px-6">



<div class="max-w-3xl mx-auto px-6">

    <div class="bg-white shadow-2xl rounded-3xl p-10 border border-blue-100">

        <div class="text-center mb-10">
            <h1 class="text-3xl font-extrabold text-slate-800">
                Pesan Layanan
            </h1>
            <p class="text-blue-600 font-semibold mt-2">
                {{ $service_name }}
            </p>
        </div>

        <form method="POST" action="{{ url('/service/submit') }}">
    @csrf

    @dd($request->all)
    
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Nama Lengkap
                </label>
                <input type="text" name="name"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Email
                </label>
                <input type="email" name="email"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Nomor HP
                </label>
                <input type="text" name="phone"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Pesan Tambahan
                </label>
                <textarea name="message" rows="4"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none transition"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg transition-all duration-300">
                Kirim Permintaan 🚀
            </button>

        </form>

    </div>

</div>

</body>
</html>
