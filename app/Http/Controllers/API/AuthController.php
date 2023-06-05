<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|min:10|max:13',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Create a new user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Create a JWT token for the new user
        $token = JWTAuth::fromUser($user);

        // Sending a response with a token
        return response()->json([
            'message' => 'User registered successfully',
            'token' => $token,
            'user' => $user,
        ], 201);
    }

    public function login(Request $request)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Retrieve user credentials
        $credentials = $request->only('email', 'password');

        try {
            // Try authenticating
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['message' => 'Invalid credentials'], 401);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create token'], 500);
        }

        // Authentication successful, send token in response
        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
        ], 200);
    }
}
