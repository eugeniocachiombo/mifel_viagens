<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagems', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_viagem')->default('0');
            $table->string('desc_viagem', 1500)->default('0');
            $table->unsignedBigInteger('cod_dificuldade')->nullable();
            $table->integer('EmDestaque_viagem')->default(0);
            $table->integer('duracao_viagem')->default(1);
            $table->integer('vagas_viagem')->nullable();
            $table->decimal('preco_viagem', 10, 2)->nullable();
            $table->integer('status_viagem')->default(1);
            $table->integer('estrelas_viagem')->default(1);
            

            $table->foreign('cod_dificuldade')
                ->references('id')->on('dificuldade_viagems')
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
        Schema::dropIfExists('viagems');
    }
}
