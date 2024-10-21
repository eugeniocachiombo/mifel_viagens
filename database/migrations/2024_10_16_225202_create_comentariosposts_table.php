<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateComentariospostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentariosposts', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('cod_viagem_comentarios');
            $table->unsignedBigInteger('cod_cliente_comentarios');
            $table->text('desc_comentario')->default("nenhuma");
            $table->timestamp('data_comentario')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status_comentario', ['Pendente', 'Aprovado', 'Rejeitado'])->default('Pendente');

            $table->foreign('cod_viagem_comentarios')
                ->references('id')->on('viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cod_cliente_comentarios')
                ->references('id')->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index('cod_viagem_comentarios');
            $table->index('cod_cliente_comentarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentariosposts');
    }
}
