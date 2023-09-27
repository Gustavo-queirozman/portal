<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracaoSMS extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa',
        'api_token',
        'modelo_sms'
    ];

    protected $table = 'configuracao_envio_sms';
}
