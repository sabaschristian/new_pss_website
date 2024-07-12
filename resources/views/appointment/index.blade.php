<x-layout>
    <div class="max-w-md sm:max-w-4xl w-full mx-auto my-16 min-h-full bg-white border border-gray-300 shadow-sm rounded-lg">
        <div class="px-4 py-2 sm:py-8">
            <form action="{{ route('appointment.store') }}" method="post" class="space-y-8">
                @csrf
                <h1 class="text-3xl font-medium">Appointment Form</h1>
                <div class="">
                    <label for="first_name" class="font-medium">Firstname</label>
                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none focus:ring-slate-500 @error('first_name') ring-1 ring-red-500 @enderror">
                    @error('first_name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label for="last_name" class="font-medium">Lastname</label>
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none focus:ring-slate-500 @error('last_name') ring-1 ring-red-500 @enderror">
                    @error('last_name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label for="middle_name" class="font-medium">Middlename</label>
                    <input type="text" name="middle_name" id="middle_name" value="{{ old('middle_name') }}" class="w-full border border-slate-500 rounded-md p-2 shadow-sm focus:outline-none focus:ring-slate-500 @error('middle_name') ring-1 ring-red-500 @enderror">
                    @error('middle_name')
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
                <div class="flex flex-col">
                    <label for="appointments" class="font-medium">Appointment:</label>
                    <select name="appointments" id="appointments" class="py-2 focus:outline-none">
                        <option value="default">Select an appointment</option>
                        <option value="Pay in Cashier">Pay in Cashier</option>
                        <option value="Inquire">Inquire</option>
                        <option value="Meeting">Meeting</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="appointment_date" class="font-medium">Choose date:</label>
                    <input type="date" id="appointment_date" name="appointment_date" class="py-2">
                </div>
                <div class="">
                    <button class="p-2 bg-blue-500 uppercase rounded-lg w-full font-medium text-white hover:bg-blue-400">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>