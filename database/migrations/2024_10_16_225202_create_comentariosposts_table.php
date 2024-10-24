<?php

use App\Models\Comentariospost;
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

        $this->cadastrar(2, 5, 'louco, este pacote é bom demais', '2024-07-09', 'Aprovado');
    }

    public function cadastrar($cod_viagem_comentarios, $cod_cliente_comentarios, $desc_comentario, $data_comentario, $status_comentario)
    {
        Comentariospost::create([
            "cod_viagem_comentarios" => $cod_viagem_comentarios,
            "cod_cliente_comentarios" => $cod_cliente_comentarios,
            "desc_comentario" => $desc_comentario,
            "data_comentario" => $data_comentario,
            "status_comentario" => $status_comentario,
        ]);
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
