<?php

namespace App\Http\Controllers\Configuracao\email;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoEmail;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class MostrarConfiguracaoEmailController
{
    use AsAction;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $configuracao = ConfiguracaoEmail::find(1);
        return view('Configuracao.email.mostrar', compact('configuracao'));
    }
}
