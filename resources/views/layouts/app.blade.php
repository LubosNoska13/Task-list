<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">

    <h1 class="text-2xl mb-4 font-bold">@yield('main-heading')</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if (session('danger'))
        <div>
            {{ session('danger') }}
        </div>
    @endif

    @yield('content')
</body>
</html>