<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinhos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_pacote_viagems');
            $table->unsignedBigInteger('id_pacotehospedagems');
            $table->unsignedBigInteger('id_pacoterefeicaos');
            $table->unsignedBigInteger('id_viagem');

            $table->foreign('id_usuario')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_pacote_viagems')
                ->references('id')->on('pacote_viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_pacotehospedagems')
                ->references('id')->on('pacotehospedagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_pacoterefeicaos')
                ->references('id')->on('pacoterefeicaos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_viagem')
                ->references('id')->on('viagems')
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
        Schema::dropIfExists('carrinhos');
    }
}
