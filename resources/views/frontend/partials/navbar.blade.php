<header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-blue-100">
  <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between gap-6">

    {{-- LOGO --}}
    {{-- LOGO --}}
<a href="/" class="flex items-center gap-3">
    <div class="flex items-center justify-center
                h-11 w-11 rounded-2xl
                bg-brand-100 shadow-soft">
        <img src="{{ asset('img/logo.png') }}"
            alt="PabrikOnline"
            class="h-8 w-9 object-contain">
    </div>

    <div class="leading-tight hidden sm:block">
        <div class="font-extrabold text-brand-800 text-lg">
            PabrikOnline
        </div>
        <div class="text-[11px] text-brand-500 font-semibold">
            domain • hosting • website
        </div>
    </div>
</a>


    {{-- MENU --}}
  <nav class="hidden md:flex items-center gap-7 text-sm font-semibold">
<!-- hosting scroll ke home  -->
      <a class="text-slate-700 hover:text-blue-700" href="/">Home</a>

<!-- hosting scroll ke domain -->
      <a class="text-slate-700 hover:text-blue-700"
        href="{{ url('/#cek-domain') }}">
          Domain
      </a>



<!-- hosting scroll ke hosting  -->
      <a class="text-slate-700 hover:text-blue-700"
      href="{{ url('/#hosting') }}">
      Hosting
      </a>

<!-- hosting scroll ke website  -->
      <a class="text-slate-700 hover:text-blue-700" 
      href="{{ url('/#website') }}">
      website
      </a>

<!-- Contact scroll ke Dukungan Teknis -->
      <a class="text-slate-700 hover:text-blue-700"
      href="{{ url('/#contact') }}">
      Contact
    </a>


  </nav>

    {{-- ACTIONS --}}

    <div class="px-4 py-2 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold
                shadow-[0_10px_30px_rgba(37,99,235,0.25)]">
      <a href="/admin/login" 
    class="hidden sm:inline text-sm font-semibold text-white hover:text-gray-200">
    Admin
</a>

      </a>
  </div>

</header>
