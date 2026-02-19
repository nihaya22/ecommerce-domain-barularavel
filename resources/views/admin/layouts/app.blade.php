<!DOCTYPE html>
<html lang="en">
<head>
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

    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gradient-to-b from-white to-brand-50 text-slate-800">
    <div class="flex min-h-screen">
        @include('admin.partials.sidebar')

        <div class="flex-1 flex flex-col">
            @include('admin.partials.header')

            <main class="flex-1 bg-transparent">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
