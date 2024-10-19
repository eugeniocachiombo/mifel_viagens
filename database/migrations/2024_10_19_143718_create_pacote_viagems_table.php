<?php

use App\Models\PacoteViagem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacoteViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacote_viagems', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo_pacote', 50);
            $table->string('desc_pacote', 200);
            $table->float('preco_pacote')->default(1);
            $table->unsignedBigInteger('id_destino');
            $table->unsignedBigInteger('id_tipoviagem');
            $table->integer('status_pacote')->default(1);
            $table->integer('max_qtd_pessoas')->nullable();

            // Viagens 
           // $table->integer('duracao_viagem');

            $table->foreign('id_destino')
                ->references('id')->on('destinos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->foreign('id_tipoviagem')
                ->references('id')->on('tipoviagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function cadastrarPacotesViagem($dados){
        PacoteViagem::create( [
            "titulo_pacote" => $dados->titulo_pacote,
            "desc_pacote" => $dados->desc_pacote,
            "preco_pacote" => $dados->preco_pacote,
            "id_destino" => $dados->id_destino,
            "id_tipoviagem" => $dados->id_tipoviagem,
            "status_pacote" => $dados->status_pacote,
            "max_qtd_pessoas" => $dados->max_qtd_pessoas,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacote_viagems');
    }
}
