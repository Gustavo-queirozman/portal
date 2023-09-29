<?php

namespace App\Http\Controllers\Configuracao\sms;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoSms;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class MostrarConfiguracaoSmsController
{

    use AsAction;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $configuracao = ConfiguracaoSms::find(1);
        return view('Configuracao.sms.mostrar', compact('configuracao'));
    }
}
