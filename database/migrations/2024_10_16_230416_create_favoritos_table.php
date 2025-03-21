<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id('id'); 
            $table->unsignedBigInteger('cod_viagem_favoritos'); 
            $table->unsignedBigInteger('cod_cliente_favoritos'); 
            $table->timestamp('data_adicao_favoritos')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

            
            $table->foreign('cod_cliente_favoritos')
                ->references('id')->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cod_viagem_favoritos')
                ->references('id')->on('viagems') 
                ->onDelete('cascade')
                ->onUpdate('cascade');

            
            $table->index('cod_viagem_favoritos');
            $table->index('cod_cliente_favoritos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoritos');
    }
}
