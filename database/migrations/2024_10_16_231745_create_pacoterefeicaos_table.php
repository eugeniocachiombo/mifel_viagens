<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacoterefeicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacoterefeicaos', function (Blueprint $table) {
            $table->id('id'); 
            $table->string('titulo_pacoteRefeicao', 50)->default('0');
            $table->string('desc_pacoteRefeicao', 200);
            $table->float('preco_pacoteRefeicao')->nullable(); 
            $table->integer('status_pacoteRefeicao')->default(1);
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
        Schema::dropIfExists('pacoterefeicaos');
    }
}
