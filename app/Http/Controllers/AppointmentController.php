<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('appointment.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $fields = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'appointments' => 'required|string',
            'appointment_date' => 'required|date',
        ]);

        $appointment = Appointment::create(['user_id' => Auth::id(), ...$fields]);
        
        return redirect()->route('appointment.show', ['id' => $appointment->id])->with('success', 'Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $latest_appointment = Appointment::latest('id')->first();

        // // $appointments = Auth::user()->appointments;

        return view('appointment.show', ['appointments' => $latest_appointment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
