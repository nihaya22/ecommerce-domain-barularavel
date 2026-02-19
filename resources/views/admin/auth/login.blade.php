<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-800 flex items-center justify-center h-screen">


    <div class="bg-white p-10 rounded-2xl shadow-xl w-96 border border-blue-200">
        <h1 class="text-2xl font-bold text-blue-700 mb-6 text-center">
            Admin Login
        </h1>

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
            @csrf

            <input type="email" name="email" placeholder="Email" required
                class="w-full p-3 rounded-lg border border-blue-300
                       focus:outline-none focus:ring-2 focus:ring-blue-400">

            <input type="password" name="password" placeholder="Password" required
                class="w-full p-3 rounded-lg border border-blue-300
                       focus:outline-none focus:ring-2 focus:ring-blue-400">

            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600
                       text-white p-3 rounded-lg font-semibold transition">
                Login
            </button>
        </form>
    </div>

</body>
</html>
