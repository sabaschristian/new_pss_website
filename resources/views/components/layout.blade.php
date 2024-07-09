<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-screen w-full sm:w-auto">
        <header class="flex flex-col items-center">
            <nav class="px-2 py-4">
                {{-- Mobile Menu --}}
                <div class="">
                    <a class="sm:hidden" href="{{ route('home.index') }}" class="no-underline">
                        <img width="50" src="{{ URL('images/pss_logo.jpeg') }}" alt="Passionist Sisters' School">
                    </a>
                </div>
            </nav>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer>

        </footer>
    </body>
</html>
