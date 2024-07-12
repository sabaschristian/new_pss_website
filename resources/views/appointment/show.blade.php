<x-layout>
    <div class="max-w-md sm:max-w-4xl w-full mx-auto my-16 min-h-full bg-white border border-gray-300 shadow-sm rounded-lg">
        <div class="">
            @session('success')
                <p class="text-slate-800 p-4 bg-lime-300">{{ session('success') }}</p>
            @endsession
            <div class="px-4 py-2 sm:py-8">
                <div class="space-y-8">
                    <h1 class="text-3xl font-medium">Appointment Information</h1>
                    <div class="">
                        <label class="font-bold">Firstname:</label>
                        <p class="px-2 mt-1">{{ $appointments->first_name }}</p>
                    </div>
                    <div class="">
                        <label class="font-bold">Lastname:</label>
                        <p class="px-2 mt-1">{{ $appointments->last_name }}</p>
                    </div>
                    <div class="">
                        <label class="font-bold">Middlename:</label>
                        <p class="px-2 mt-1">{{ $appointments->middle_name }}</p>
                    </div>
                    <div class="">
                        <label class="font-bold">Email:</label>
                        <p class="px-2 mt-1">{{ $appointments->email }}</p>
                    </div>
                    <div class="">
                        <label class="font-bold">Appointment:</label>
                        <p class="px-2 mt-1">{{ $appointments->appointments}}</p>
                    </div>
                    <div class="">
                        <label class="font-bold">Appointment Date:</label>
                        <p class="px-2 mt-1">{{ $appointments->appointment_date}}</p>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('home.index') }}" class="p-2 bg-blue-500 uppercase rounded-lg font-medium text-white hover:bg-blue-400">Proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>