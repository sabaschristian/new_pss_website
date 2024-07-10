<x-layout>
    @auth
    <h1 class="text-3xl">Welcome, {{ $user->username }}</h1>
    @endauth
    @guest
        Home Page
    @endguest
</x-layout>