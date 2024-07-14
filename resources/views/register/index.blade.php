<x-layout>
    <div class="max-w-md sm:max-w-lg w-full mx-auto my-10 min-h-full bg-white border border-gray-300 shadow-lg rounded-lg">
        <div class="px-6 py-12">
            <a href="{{ route('home') }}" class="flex justify-center">
                <img src="{{ URL('images/pss_logo.jpeg') }}" alt=" Passionist Sisters' School" width="50">
            </a>
            <h1 class="mt-3 text-center text-2xl font-medium">Passionist Sisters' School</h1>
            <form action="{{ route('register.register') }}" method="post" class="space-y-8">
                @csrf
                <h2 class="text-3xl font-medium">Sign up</h2>
                <div class="">
                    <label for="username" class="font-medium">Username</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none focus:ring-slate-500 @error('username') ring-1 ring-red-500 @enderror">
                    @error('username')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label for="email" class="font-medium">Email</label>
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none focus:ring-slate-500 @error('email') ring-1 ring-red-500 @enderror">
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
                    <label for="password_confirmation" class="font-medium">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none @error('password') ring-1 ring-red-500 @enderror">
                </div>
                <div class="flex justify-end">
                    <p>Already have an account? <a href="{{ route('login') }}" class="underline decoration-lime-500 text-lime-500">Sign in here.</a></p>
                </div>
                <div class="">
                    <button class="p-2 bg-blue-500 uppercase rounded-lg w-full font-medium text-white hover:bg-blue-400">Register</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>