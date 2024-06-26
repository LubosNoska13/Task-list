<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">

    <h1 class="text-2xl mb-4 font-bold">@yield('main-heading')</h1>

    @if (session('success'))
        <div id="flash-message" class="relative mb-10 rounded-md shadow-sm text-green-700 bg-green-100 px-4 py-3" role="alert">
            <p class="font-medium mb-2">Success!<p/>
            <p>{{ session('success') }}</p>

            <span id="flash-message-cross" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" @click="flash = false"
                    stroke="currentColor" class="h-6 w-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        </div>
    @endif

    @if (session('danger'))
        <div id="flash-message" class="relative mb-10 rounded-md shadow-sm text-red-700 bg-red-100 px-4 py-3" role="alert">
            <p class="font-medium mb-2">Success!<p/>
            <p>{{ session('danger') }}</p>

            <span id="flash-message-cross" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" @click="flash = false"
                    stroke="currentColor" class="h-6 w-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        </div>
    @endif

    @yield('content')
</body>
</html>