<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: {
                50:  "#eff6ff",
                100: "#dbeafe",
                200: "#bfdbfe",
                300: "#93c5fd",
                400: "#60a5fa",
                500: "#3b82f6",
                600: "#2563eb",
                700: "#1d4ed8",
                800: "#1e40af",
                900: "#1e3a8a",
              },
              ink: "#0b1220"
            },
            boxShadow: {
              soft: "0 10px 30px rgba(37,99,235,0.15)",
            }
          }
        }
      }
    </script>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gradient-to-b from-white to-brand-50 text-slate-800">
    <div class="min-h-screen flex">

        {{-- Sidebar kamu --}}
        @include('admin.partials.sidebar')

        <div class="flex-1 flex flex-col min-h-screen">

            {{-- Navbar/Header kamu --}}
            @include('admin.partials.header')

            {{-- Content --}}
            <main class="flex-1 p-6">
                <div class="max-w-6xl mx-auto space-y-6">

                    {{-- wrapper card biar tiap halaman tampil elegan --}}
                    <div class="bg-white/90 backdrop-blur rounded-2xl shadow-soft border border-brand-100 p-6">
                        @yield('content')
                    </div>

                </div>
            </main>

            {{-- Footer kamu --}}
            @include('admin.partials.footer')

        </div>
    </div>
</body>
</html>
