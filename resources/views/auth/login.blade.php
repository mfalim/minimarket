<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100">
    <main class="flex min-h-screen items-center justify-center px-4">
        <div class="w-full max-w-md rounded-xl bg-white p-8 shadow-lg">
            <div class="mb-6 text-center">
                <h1 class="text-3xl font-bold text-gray-800">
                    Login
                </h1>
                <p class="mt-2 text-sm text-gray-500">
                    Silakan masuk ke akun Anda
                </p>
            </div>
            @if (session('status'))
                <div class="mb-4 rounded-lg bg-green-100 p-3 text-sm text-green-700">
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 p-3 text-sm text-red-700">
                    <ul class="list-inside list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login.authenticate') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                        placeholder="Masukkan email">
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <input id="password" type="password" name="password" required
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                        placeholder="Masukkan password">
                </div>
                <label class="flex items-center gap-2 text-sm text-gray-600">
                    <input type="checkbox" name="remember" value="1" class="h-4 w-4 rounded border-gray-300">
                    <span>Ingat saya</span>
                </label>
                <button type="submit"
                    class="w-full rounded-lg bg-blue-600 px-4 py-2.5 font-medium text-white transition hover:bg-blue-700">
                    Masuk
                </button>
            </form>
        </div>
    </main>
</body>
</html>
