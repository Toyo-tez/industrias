<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AlarmaController extends BaseController
{
    public function getAlarmas()
    {
        // Aquí devuelves los datos que quieras (en este caso, solo un ejemplo con un valor de accidente)
        return response()->json(['alarmas' => 15]);
    }
}
