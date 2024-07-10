<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function register(Request $request) {
        $fields = $request->validate([
            'username' => 'required',
            'email' => 'required|email:unique:users',
            'password' => 'required|min:3|confirmed',
        ]);

        
        $user = User::create($fields);

        Auth::login($user);

        return redirect()->route('login.index');
    }
}
