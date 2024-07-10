<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Passionist Sisters' School</title>

        <link rel="icon" href="{{ URL('images/pss_logo.jpeg') }}" type="image/jpeg">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://kit.fontawesome.com/aa5e707bac.js" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-screen w-full sm:w-auto flex flex-col">
        <header class="px-6 py-4 relative shadow-lg mb-auto">
            <nav class="flex items-center justify-between">
                    <a class="flex items-center gap-4" href="{{ route('home.index') }}">
                        <img width="50" src="{{ URL('images/pss_logo.jpeg') }}" alt="Passionist Sisters' School">
                        <h1 class="text-3xl hidden md:flex">Passionist Sisters' School</h1>
                    </a>
                    {{-- Desktop Menu --}}
                    <div class="hidden sm:flex items-center gap-4 uppercase font-medium">
                        <a href="#" class="rounded-lg hover:text-lime-600">Appointment</a>
                        <a href="#" class="rounded-lg hover:text-lime-600">Blog</a>
                        <a href="#" class="rounded-lg hover:text-lime-600">About</a>
                        <a href="{{ route('login.index') }}" class="p-2 bg-blue-500 uppercase rounded-lg w-full hover:bg-blue-300">Login</a>
                    </div>
                    {{-- Mobile Menu --}}
                    <div class="sm:hidden" x-data="{ open: false }">
                        <button @click="open = !open"><i class="fa-solid fa-bars"></i></button>
                        <div class="mobile-menu-list" x-show="open" @click.outside="open = false">
                            <button class="text-right" x-show="open" @click="open = !open">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <a href="#" class="px-4 py-2 rounded-lg hover:bg-lime-300">Appointment</a>
                            <a href="#" class="px-4 py-2 rounded-lg hover:bg-lime-300">Blog</a>
                            <a href="#" class="px-4 py-2 rounded-lg hover:bg-lime-300">About</a>
                            <a href="{{ route('login.index') }}" class="p-2 bg-blue-500 uppercase rounded-lg w-full hover:bg-blue-300">Login</a>
                        </div>
                    </div>
            </nav>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer class="mt-auto bg-white p-5 text-center border border-slate-300">
            <p>Copyright Passionist Sisters' School</p>
        </footer>
    </body>
</html>
