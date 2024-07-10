<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function login(Request $request) {
        //Logic for login
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    }
}
