<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class HorasController extends BaseController
{
    public function getHoras()
    {
        // Aquí devuelves los datos que quieras (en este caso, solo un ejemplo con un valor de accidente)
        return response()->json(['horas' => 168]);
    }
}
