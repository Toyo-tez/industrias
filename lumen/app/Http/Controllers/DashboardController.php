<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Aquí puedes cargar y devolver estadísticas
        return response()->json([
            'message' => 'Bienvenido al dashboard de estadísticas',
            // Agrega datos relevantes aquí
        ]);
    }
}
