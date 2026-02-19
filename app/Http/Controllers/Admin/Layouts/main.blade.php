<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @include('Admin.Partials.start')
</head>
<body class="bg-purple-50 text-gray-800">

    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        @include('Admin.Partials.sidebar')

        {{-- Content --}}
        <div class="flex-1">
            @include('Admin.Partials.header')

            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @include('Admin.Partials.end')
</body>
</html>
