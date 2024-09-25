<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; 

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Usar Validator en lugar de $request->validate()
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }

        $user = DB::table('users')->where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Aquí podrías generar un token de sesión o JWT
        return response()->json(['message' => 'Login successful']);
    }
}

