<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AccidentesController extends BaseController
{
    public function getAccidentes()
    {
        // Aquí devuelves los datos que quieras (en este caso, solo un ejemplo con un valor de accidente)
        return response()->json(['accidentes' => 5]);
    }
}
