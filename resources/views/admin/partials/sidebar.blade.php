<aside class="w-72 bg-white/90 backdrop-blur border-r border-brand-100 p-5">
    {{-- Brand / Logo --}}
    <div class="flex items-center gap-3 mb-8">
        <div class="h-10 w-10 rounded-xl bg-brand-600 text-white grid place-items-center font-bold shadow-soft">
            A
        </div>
        <div class="leading-tight">
            <div class="font-extrabold text-slate-900">Admin Panel</div>
            <div class="text-xs text-slate-500">pabrikonline</div>
        </div>
    </div>

    {{-- Menu --}}
    <nav class="space-y-2">

        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition
           {{ request()->routeIs('admin.dashboard') ? 'bg-brand-600 text-white shadow-soft' : 'text-slate-700 hover:bg-brand-50 hover:text-brand-800' }}">
            <span class="h-9 w-9 rounded-xl grid place-items-center
            {{ request()->routeIs('admin.dashboard') ? 'bg-white/15' : 'bg-brand-50 border border-brand-100 text-brand-700' }}">
                🏠
            </span>
            Dashboard
        </a>

        <a href="{{ route('admin.domains') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition
           {{ request()->routeIs('admin.domains') ? 'bg-brand-600 text-white shadow-soft' : 'text-slate-700 hover:bg-brand-50 hover:text-brand-800' }}">
            <span class="h-9 w-9 rounded-xl grid place-items-center
            {{ request()->routeIs('admin.domains') ? 'bg-white/15' : 'bg-brand-50 border border-brand-100 text-brand-700' }}">
                🌐
            </span>
            Domains
        </a>

        <a href="{{ route('admin.services') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition
           {{ request()->routeIs('admin.services') ? 'bg-brand-600 text-white shadow-soft' : 'text-slate-700 hover:bg-brand-50 hover:text-brand-800' }}">
            <span class="h-9 w-9 rounded-xl grid place-items-center
            {{ request()->routeIs('admin.services') ? 'bg-white/15' : 'bg-brand-50 border border-brand-100 text-brand-700' }}">
                🧩
            </span>
            Services
        </a>

        <a href="{{ route('admin.inquiries') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition
           {{ request()->routeIs('admin.inquiries') ? 'bg-brand-600 text-white shadow-soft' : 'text-slate-700 hover:bg-brand-50 hover:text-brand-800' }}">
            <span class="h-9 w-9 rounded-xl grid place-items-center
            {{ request()->routeIs('admin.inquiries') ? 'bg-white/15' : 'bg-brand-50 border border-brand-100 text-brand-700' }}">
                ✉️
            </span>
            Inquiries
        </a>

        <a href="{{ route('admin.testimonials') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition
           {{ request()->routeIs('admin.testimonials') ? 'bg-brand-600 text-white shadow-soft' : 'text-slate-700 hover:bg-brand-50 hover:text-brand-800' }}">
            <span class="h-9 w-9 rounded-xl grid place-items-center
            {{ request()->routeIs('admin.testimonials') ? 'bg-white/15' : 'bg-brand-50 border border-brand-100 text-brand-700' }}">
                ⭐
            </span>
            Testimonials
        </a>

    </nav>


    {{-- Footer mini card --}}
    <div class="mt-10 p-4 rounded-2xl bg-brand-50 border border-brand-100">
        <div class="text-sm font-semibold text-slate-900">Quick Tip</div>
        <div class="text-xs text-slate-600 mt-1">
            Menu aktif otomatis nyala biru ✅
        </div>
        
<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button class="mt-4 w-full px-4 py-2.5 rounded-xl bg-white border border-brand-200 hover:bg-brand-100 transition text-slate-700 font-semibold">
            Logout
        </button>
</form>

        
    </div>
</aside>
