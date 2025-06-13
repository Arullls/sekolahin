<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login - Sekolahin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-1">Email / NISN</label>
                <input type="text" name="email" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Password</label>
                <input type="password" name="password" class="w-full border rounded p-2" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700">Login</button>
        </form>
    </div>
</body>

</html>
