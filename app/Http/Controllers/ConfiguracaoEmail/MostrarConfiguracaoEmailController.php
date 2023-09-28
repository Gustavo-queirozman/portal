<?php

namespace App\Http\Controllers\ConfiguracaoEmail;

use App\Http\Controllers\Controller;
use App\Models\ConfiguracaoEmail;
use Illuminate\Http\Request;

class MostrarConfiguracaoEmailController extends Controller
{
    public function create(){
        $configuracao = ConfiguracaoEmail::find(1);
        return view('ConfiguracaoEmail.mostrar', compact('configuracao'));
    }
}
