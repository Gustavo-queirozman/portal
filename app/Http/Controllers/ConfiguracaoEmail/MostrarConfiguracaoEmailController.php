<?php

namespace App\Http\Controllers\ConfiguracaoEmail;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoEmail;
use Illuminate\Http\Request;

class MostrarConfiguracaoEmailController extends Controller
{
    public function __invoke(){
        $configuracoes = ConfiguracaoEmail::find(1);
        return view('ConfiguracaoEmail.mostrar', compact('configuracoes'));
    }
}
