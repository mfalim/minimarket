<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100">
    <header class="bg-white shadow-sm">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <div>
                <h1 class="text-xl font-bold text-gray-800">
                    User Dashboard
                </h1>
                <p class="text-sm text-gray-500">
                    Halaman pengguna
                </p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="rounded-lg bg-red-500 px-4 py-2 text-sm font-medium text-white transition hover:bg-red-600">
                    Logout
                </button>
            </form>
        </div>
    </header>
    <main class="mx-auto max-w-7xl px-6 py-8">
        <div class="rounded-xl bg-white p-8 shadow-sm">
            <h2 class="mb-2 text-2xl font-bold text-gray-800">
                Selamat Datang, {{ Auth::user()->name }}
            </h2>
            <p class="text-gray-600">
                Ini adalah halaman user.
            </p>
        </div>
    </main>
</body>
</html>
