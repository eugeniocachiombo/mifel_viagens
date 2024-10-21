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
            $table->text('desc_pacote')->default("nenhuma");
            $table->float('preco_pacote')->default(1);
            $table->unsignedBigInteger('id_destino');
            $table->unsignedBigInteger('id_tipoviagem');
            $table->integer('status_pacote')->default(1);
            $table->integer('max_qtd_pessoas')->nullable();
           
           $table->integer('dia_itinerario');
           $table->string('desc_itinerario', 200);
           $table->integer('duracao_viagem');

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

        $this->cadastrarPacotesViagem("Pacote Mínimo Luanda I", "Viagem de Avião Para Luanda",100000.5,1,2,2,"Paragem por 30 minutos",rand(1,5),rand(1,5));
        $this->cadastrarPacotesViagem("Pacote Mínimo Luanda II", "Viagem de Carro Para Luanda",50000.5,1,1,3,"Paragem por 20 minutos",rand(1,5),rand(1,5));
        $this->cadastrarPacotesViagem("Pacote Mínimo Benguela I", "Viagem de Avião Para Benguela",150000.55,2,2,2,"Paragem por 30 minutos",rand(1,5),rand(1,5));
        $this->cadastrarPacotesViagem("Pacote Mínimo Benguela II", "Viagem de Carro Para Benguela",50500.90,2,1,3,"Paragem por 20 minutos",rand(1,5),rand(1,5));
        $this->cadastrarPacotesViagem("Pacote Mínimo Huila I", "Viagem de Avião Para Huila",200000.55,3,2,2,"Paragem por 30 minutos",rand(1,5),rand(1,5));
        $this->cadastrarPacotesViagem("Pacote Mínimo Huila II", "Viagem de Carro Para Huila",50700.90,3,1,3,"Paragem por 20 minutos",rand(1,5),rand(1,5));
        $this->cadastrarPacotesViagem("Pacote Mínimo Namibe I", "Viagem de Avião Para Namibe",207000.55,4,2,2,"Paragem por 30 minutos",rand(1,5),rand(1,5));
        $this->cadastrarPacotesViagem("Pacote Mínimo Namibe II", "Viagem de Carro Para Namibe",50100.90,4,1,3,"Paragem por 20 minutos",rand(1,5),rand(1,5));
    }

    public function cadastrarPacotesViagem(
    $titulo_pacote,
    $desc_pacote,
    $preco_pacote,
    $id_destino,
    $id_tipoviagem,
    $dia_itinerario,
    $desc_itinerario,
    $duracao_viagem,
    $max_qtd_pessoas
    ){
        PacoteViagem::create( [
            "titulo_pacote" => $titulo_pacote,
            "desc_pacote" => $desc_pacote,
            "preco_pacote" => $preco_pacote,
            "id_destino" => $id_destino,
            "id_tipoviagem" => $id_tipoviagem,
    
            "dia_itinerario" => $dia_itinerario,
            "desc_itinerario" => $desc_itinerario,
            "duracao_viagem" => $duracao_viagem,
    
            "max_qtd_pessoas" => $max_qtd_pessoas,
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
