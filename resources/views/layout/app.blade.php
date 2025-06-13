<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Aplikasi Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @stack('styles')
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow p-4">
        <div class="max-w-7xl mx-auto flex justify-between">
            <span class="text-xl font-bold">Sekolahin</span>
            <div>
                <a href="/dashboard" class="text-blue-600 hover:underline mx-2">Dashboard</a>
                <a href="/ujian" class="text-blue-600 hover:underline mx-2">Ujian</a>
                <a href="/nilai" class="text-blue-600 hover:underline mx-2">Nilai</a>
                <a href="/profil" class="text-blue-600 hover:underline mx-2">Profil</a>
                <a href="/logout" class="text-red-500 hover:underline mx-2">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-8">
        @yield('content')
    </main>

    @stack('scripts')
</body>

</html>
