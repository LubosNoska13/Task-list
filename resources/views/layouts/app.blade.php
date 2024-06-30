<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-100">
    @auth
        @include('layouts.navigation')
    @endauth

    <div class="h-10"></div>
    <div class="relative">
        <x-flash-message type="success" />
        <x-flash-message type="danger" />
    </div>

    <main class="container mx-auto max-w-2xl">
        <div class="relative py-10 px-16 bg-white mx-auto min-h-96 rounded-xl border border-gray-200 shadow-sm">
            <h1 class="text-2xl mb-6 font-bold">@yield('main-heading')</h1>

            @yield('content')
            <x-progress-bar />
        </div>
    </main>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>