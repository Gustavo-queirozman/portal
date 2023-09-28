<?php

namespace App\Http\Controllers\ConfiguracaoEmail;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoEmail;
use Illuminate\Http\Request;

class CriarConfiguracaoEmailController extends Controller
{
    public function store(Request $request){

        $dados = [
            'servidor' => $request->input('servidor'),
            'porta' => $request->input('porta'),
            'seguranca' => $request->input('seguranca'),
            'usuario' => $request->input('usuario'),
            'senha' => $request->input('senha'),
            'email' => $request->input('email')
        ];

        ConfiguracaoEmail::updateOrInsert(['id' => 1], $dados);

        return view('ConfiguracaoEmail.mostrar')->with('configuracao', $dados);
    }
}
