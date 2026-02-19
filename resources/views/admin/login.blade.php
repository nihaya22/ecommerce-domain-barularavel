<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin 💜</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-pink-light flex items-center justify-center h-screen">

    <div class="bg-purple-light rounded-2xl shadow-lg p-8 w-full max-w-sm">
        <h1 class="text-2xl font-bold text-purple-dark text-center mb-6">Admin Login 🌸</h1>

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf  <!-- wajib -->
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
