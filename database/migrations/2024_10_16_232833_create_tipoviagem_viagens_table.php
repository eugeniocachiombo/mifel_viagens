<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoviagemViagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoviagem_viagens', function (Blueprint $table) {
            $table->id('id'); 
            $table->unsignedBigInteger('cod_viagens')->nullable(); 
            $table->unsignedBigInteger('cod_tipoviagem')->nullable(); 

            
            $table->index('cod_viagens');
            $table->index('cod_tipoviagem');

            
            $table->foreign('cod_viagens')
                  ->references('id')
                  ->on('viagems')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('cod_tipoviagem')
                  ->references('id')
                  ->on('tipoviagems')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('tipoviagem_viagens');
    }
}
