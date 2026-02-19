<header class="sticky top-0 z-20 bg-white/80 backdrop-blur border-b border-brand-100">
    <div class="px-6 py-4 flex items-center justify-between gap-4">

        {{-- LEFT : PAGE TITLE --}}
        <div class="flex items-center gap-3">
            <div class="h-9 w-9 rounded-xl bg-brand-600 text-white grid place-items-center font-bold shadow-soft">
                A
            </div>
            <div class="leading-tight">
                <h1 class="text-lg font-extrabold text-slate-900">
                    Admin Panel
                </h1>
                <p class="text-xs text-slate-500">
                    Manage website content
                </p>
            </div>
        </div>

        {{-- CENTER : SEARCH (hidden on mobile) --}}
        <div class="hidden md:block w-80">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Search..."
                    class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-brand-200
                           bg-white focus:outline-none focus:ring-2 focus:ring-brand-300"
                >
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                    ⌕
                </span>
            </div>
        </div>

        {{-- RIGHT : ACTIONS --}}
        <div class="flex items-center gap-3">

            {{-- Notification --}}
            <button
                class="relative h-10 w-10 rounded-xl bg-white border border-brand-200
                       hover:bg-brand-50 transition"
                title="Notifications"
            >
            🔔
                <span class="absolute top-1 right-1 h-2 w-2 rounded-full bg-red-500"></span>
            </button>

            {{-- User --}}
            <div class="flex items-center gap-3 p-2 rounded-2xl bg-white border border-brand-200">
                <div class="h-8 w-8 rounded-xl bg-brand-600 text-white grid place-items-center font-bold">
                    A
                </div>
                <div class="hidden sm:block leading-tight">
                    <div class="text-sm font-semibold text-slate-900">
                        Admin
                    </div>
                    <div class="text-xs text-slate-500">
                        Online
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
