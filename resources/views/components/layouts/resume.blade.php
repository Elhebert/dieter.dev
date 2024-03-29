<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Dieter Stinglhamber' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div>
            <main class="container max-w-screen-xl mx-auto relative p-4 sm:p-16 pt-0">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
