<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('configuracao_envio_email', function (Blueprint $table) {
            $table->id();
            $table->string('servidor');
            $table->string('porta');
            $table->string('seguranca');
            $table->string('usuario');
            $table->string('senha');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuracao_envio_email');
    }
};
