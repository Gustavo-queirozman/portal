<?php

namespace App\Http\Controllers\ConfiguracaoSMS;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoSMS;
use Illuminate\Http\Request;

class MostrarConfiguracaoSMSController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function create(Request $request)
    {
        $configuracao = ConfiguracaoSMS::find(1);
        return view('ConfiguracaoSMS.mostrar', compact('configuracao'));
    }
}
