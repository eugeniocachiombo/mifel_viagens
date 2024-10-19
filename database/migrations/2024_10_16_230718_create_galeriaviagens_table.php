<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaviagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeriaviagens', function (Blueprint $table) {
            $table->id('id'); 
            $table->unsignedBigInteger('cod_viagens_galeriaViagens')->nullable();
            $table->string('foto_principal', 150)->nullable();
            $table->string('foto2', 150)->nullable();
            $table->string('foto3', 150)->nullable();
            $table->string('video', 150)->nullable();
            $table->integer('status_galeria')->default(1);
            $table->timestamps(); 

            
            $table->foreign('cod_viagens_galeriaViagens')
                ->references('id')->on('viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            
            $table->index('cod_viagens_galeriaViagens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeriaviagens');
    }
}
