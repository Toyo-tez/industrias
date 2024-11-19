<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class CanaController extends BaseController
{
    public function getCanaTalada()
    {
        // Aquí se devuelve el valor de la caña talada
        return response()->json(['caña_talada' => 120]);
    }
}

