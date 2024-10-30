<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Carga la vista 'login.blade.php'
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Login exitoso, guardar en sesión
            Session::put('user', $user->id);
            return redirect('/dashboard'); // Redirige al dashboard o a la ruta deseada
        }

        // Credenciales incorrectas
        return back()->withErrors([
            'error' => 'Nombre de usuario o contraseña incorrectos.',
        ]);
    }
}
