<x-layout>
    <div class="p-8 w-full sm:max-w-lg mx-auto">
        <div class="bg-white-300 border border-gray-300 shadow-lg w-full h-[480px] rounded-lg p-4">
            <div class="flex flex-col justify-center items-center space-y-4">
                <a href="{{ route('home.index') }}"><img src="{{ URL('images/pss_logo.jpeg') }}" width="50" alt=""></a>
                <h1 class="text-2xl">Passionist Sisters' School</h1>
                <div class="w-full p-4 space-y-4">
                    <h2 class="text-2xl font-medium">Sign in</h2>
                    <form action="{{ route('login.login') }}" method="post" class="space-y-8">
                        @csrf
                        <div class="">
                            <label for="email" class="font-medium">Email</label>
                            <input type="text" name="email" id="email" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none focus:ring-slate-500 @error('email') ring-1 ring-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="">
                            <label for="password" class="font-medium">Password</label>
                            <input type="password" name="password" id="password" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none @error('password') ring-1 ring-red-500 @enderror">
                            @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="">
                            <button class="p-2 bg-blue-500 uppercase rounded-lg w-full font-medium hover:bg-blue-400">Login</button>
                        </div>
                    </form>
                    {{-- Input Group --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>