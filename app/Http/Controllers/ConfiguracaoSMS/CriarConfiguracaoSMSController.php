<?php

namespace App\Http\Controllers\ConfiguracaoSMS;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoSMS;
use Illuminate\Http\Request;

class CriarConfiguracaoSMSController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        ConfiguracaoSMS::create(
            array(
                'empresa' => $request->input('empresa'),
                'api_token' => $request->input('api_token'),
                'modelo_sms' => $request->input('modelo_sms')
            )
        );
    }
}
