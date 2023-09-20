<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected function showRegistrationForm()
    {
        return view('register');
    }

    protected function showLoginForm()
    {
        return view('login');
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        // Custom logic after successful login
    }
}
