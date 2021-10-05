<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        
        $user = new User();
        $user->name = $fields['name'];
        $user->email = $fields['email'];
        $user->password = bcrypt($fields['password']);
        $user->save();
        
        $token = $user->createToken('myAppToken')->plainTextToken;
       
        $response = [
            'user' => $user,
            'token' => $token
        ];
        
        return response()->json($response,201);
    }
    
    public function logout(Request $request) {
        auth()->user()->tokens()->delete();
        
        return response()->json(['message' => "Logged out"]);
    }
    
     public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        
        if (!Auth::attempt($fields)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ],401);
        }
        
        return response()->json([
            'token' => auth()->user()->createToken('myAppToken')->plainTextToken
        ]);
    }
    
}
