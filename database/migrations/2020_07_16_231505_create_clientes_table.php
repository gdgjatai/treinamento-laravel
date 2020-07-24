<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('documento')->unique();
            $table->string('email');
            $table->string('telefone');
            $table->boolean('inadimplente');
            $table->date('data_nasc')->nullable();
            $table->char('sexo')->nullable();
            $table->enum('estado_civil', \App\Cliente::ESTADOS_CIVIS)->nullable();
            $table->string('deficiencia_fisica')->nullable();
            $table->string('fantasia')->nullable();
            $table->string('pessoa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
