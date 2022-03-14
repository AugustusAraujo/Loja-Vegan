<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("usuarios",function(Blueprint $table){
            $table->id("usuario_id");
            $table->string("nome");
            $table->string("email");
            $table->longText("senha");
            $table->string("cpf");
            $table->timestamps();
            $table->json("endereco");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
