<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function signUp(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => $data['password'],
        ]);

        return response()->json(['user' => $user, 'message' => 'User registered successfully'], 201);
    }

    public function signIn(Request $request)
    {
        //
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();
            return response()->json(['user' => $user, 'message' => 'User signed in successfully'], 200);
        }
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function forgotPassword()
    {
        //
    }

    public function resetPassword()
    {
        //
    }
}
