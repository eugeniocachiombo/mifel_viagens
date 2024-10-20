<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtinerarioviagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etinerarioviagems', function (Blueprint $table) {
            $table->id('id'); 
            $table->unsignedBigInteger('cod_viagens_ev')->nullable();
            $table->integer('dia_etinerarioViagem')->default(0);
            $table->text('desc_etinerarioViagem')->default("nenhuma");
            $table->integer('status_etinerario')->default(1);
            $table->timestamps(); 

            $table->foreign('cod_viagens_ev')
                ->references('id')->on('viagems') 
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index('cod_viagens_ev');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etinerarioviagems');
    }
}
