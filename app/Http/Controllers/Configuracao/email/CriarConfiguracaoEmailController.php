<?php

namespace App\Http\Controllers\Configuracao\email;

use App\Http\Controllers\Controller;
use App\Models\Configuracao\Email;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class CriarConfiguracaoEmailController
{
    use AsAction;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $dados = [
            'servidor' => $request->input('servidor'),
            'porta' => $request->input('porta'),
            'seguranca' => $request->input('seguranca'),
            'usuario' => $request->input('usuario'),
            'senha' => $request->input('senha'),
            'email' => $request->input('email')
        ];

        Email::updateOrInsert(['id' => 1], $dados);

        return view('Configuracao.email.mostrar')->with('configuracao', $dados);
    }
}
