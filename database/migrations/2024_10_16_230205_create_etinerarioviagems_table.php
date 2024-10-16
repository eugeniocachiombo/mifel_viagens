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
            $table->id('id'); // Auto-incremental
            $table->unsignedBigInteger('cod_viagens_ev')->nullable();
            $table->integer('dia_etinerarioViagem')->default(0);
            $table->string('desc_etinerarioViagem', 1500)->default('0');
            $table->integer('status_etinerario')->default(1);
            $table->timestamps(); // Adiciona created_at e updated_at

            // Chave estrangeira
            $table->foreign('cod_viagens_ev')
                ->references('id')->on('viagems') // Corrigido de 'viagems' para 'viagens'
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Índice
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
