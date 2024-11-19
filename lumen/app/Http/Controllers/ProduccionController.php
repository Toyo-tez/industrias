<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ProduccionController extends BaseController
{
    public function getProduccion()
    {
        // Aquí devuelves los datos que quieras (en este caso, solo un ejemplo con un valor de accidente)
        return response()->json(['produccion' => 80]);
    }
}
