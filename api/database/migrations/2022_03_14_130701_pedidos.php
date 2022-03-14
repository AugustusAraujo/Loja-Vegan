<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pedidos",function(Blueprint $table){
            $table->id("pedido_id");
            $table->foreignId("usuario_id");
            $table->float("valor_pedido");
            $table->json("items");
            $table->string("status")->default(1);
            //0 para cancelado , 1 para aguardando pagamento, 2 para aprovado , 3 para entregue , 4 para entrar em contato
            $table->timestamps(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("pedidos");
    }
}
