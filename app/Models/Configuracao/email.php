<?php

namespace App\Models\Configuracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
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
