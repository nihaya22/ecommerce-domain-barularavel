<!DOCTYPE html>
<html lang="id">
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'PabrikOnline' }}</title>
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
</head>

{{-- ✅ penting: bikin layout vertikal full --}}
<body class="min-h-screen w-full bg-brand-50 text-slate-800 flex flex-col">
    @include('frontend.partials.navbar')
    @include('frontend.partials.header')

    <main class="flex-1 w-full">
        @yield('content')
    </main>

    @include('frontend.partials.footer')
</body>

</html>
