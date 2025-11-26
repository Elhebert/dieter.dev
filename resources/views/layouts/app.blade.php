<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'dieter.dev' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900|syne:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased dark:bg-[#100F0F] bg-[#F0EAEC] dark:text-[#F0EAEC] text-[#100F0F]">
    {{-- <button class="absolute top-0 right-0 h-20 w-20 text-3xl flex justify-center items-center">🍔</button> --}}
    <main class="container max-w-screen-xl min-h-screen mx-auto p-4 flex flex-col justify-center">
        {{ $slot }}
    </main>
</body>
</html>
