<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracaoEmail extends Model
{
    use HasFactory;


    protected $fillable = [
        'servidor',
        'porta',
        'seguranca',
        'usuario',
        'senha',
        'email'
    ];

    protected $table = 'configuracao_envio_emails';
    public $timestamps = false;
}
