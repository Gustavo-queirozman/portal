<?php

namespace App\Http\Controllers\Configuracao\sms;

use App\Http\Controllers\Controller;
use App\Models\Configuracao\Sms;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class MostrarConfiguracaoSmsController extends Controller
{

    use AsAction;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $configuracao = Sms::find(1);
        return view('Configuracao.sms.mostrar', compact('configuracao'));
    }
}
