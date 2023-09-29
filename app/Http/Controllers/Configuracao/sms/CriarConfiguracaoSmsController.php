<?php

namespace App\Http\Controllers\Configuracao\sms;

use App\Http\Controllers\Controller;
use App\Models\Configuracao\Sms;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class CriarConfiguracaoSmsController extends Controller
{

    use AsAction;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $dados = [
            'empresa' => $request->input('empresa'),
            'api_token' => $request->input('api_token'),
            'modelo_sms' => $request->input('modelo_sms')
        ];

        Sms::updateOrInsert(['id' => 1], $dados);
        return view('Configuracao.sms.mostrar')->with('configuracao', $dados);
    }
}
