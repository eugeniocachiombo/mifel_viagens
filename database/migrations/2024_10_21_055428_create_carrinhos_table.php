<?php

use App\Models\Destinosviagem;
use App\Models\Etinerarioviagem;
use App\Models\Tipoviagem_viagens;
use App\Models\Viagem;
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
            $table->unsignedBigInteger('id_reserva');

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

            $table->foreign('id_reserva')
                ->references('id')->on('reservas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });

        $this->cadastrarViagens(
            "Pacote Mínimo Luanda I",
            "Viagem de Avião Para Luanda",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            1, // destino
            2, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 30 minutos" // desc itinerario
        );

        $this->cadastrarViagens(
            "Pacote Mínimo Luanda II",
            "Viagem de Carro Para Luanda",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            1, // destino 
            1, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 20 minutos" // desc itinerario
        );

        $this->cadastrarViagens(
            "Pacote Mínimo Benguela I",
            "Viagem de Avião Para Benguela",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            2, // destino
            2, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 30 minutos" // desc itinerario
        );

        $this->cadastrarViagens(
            "Pacote Mínimo Benguela II",
            "Viagem de Carro Para Benguela",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            2, // destino 
            1, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 20 minutos" // desc itinerario
        );

        $this->cadastrarViagens(
            "Pacote Mínimo Huíla I",
            "Viagem de Avião Para Huíla",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            3, // destino
            2, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 30 minutos" // desc itinerario
        );

        $this->cadastrarViagens(
            "Pacote Mínimo Huíla II",
            "Viagem de Carro Para Huíla",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            3, // destino 
            1, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 20 minutos" // desc itinerario
        );

        $this->cadastrarViagens(
            "Pacote Mínimo Namibe I",
            "Viagem de Avião Para Namibe",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            4, // destino
            2, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 30 minutos" // desc itinerario
        );

        $this->cadastrarViagens(
            "Pacote Mínimo Namibe II",
            "Viagem de Carro Para Namibe",
            1, // dificuldade
            rand(1,5), // duracao viagem
            rand(1,5), // vaga viagem
            rand(50000,100000) . "." . rand(0,99), // preco
            4, // destino 
            1, // tipo viagem
            rand(1,31), //itinerario
            "Paragem por 20 minutos" // desc itinerario
        );
    }

    public function cadastrarViagens(
        $titulo_viagem,
        $desc_viagem,
        $cod_dificuldade,
        $duracao_viagem,
        $vagas_viagem,
        $preco2,
        $cod_destino,
        $cod_tipoviagem,
        $dia_itinerario,
        $desc_itinerario
    ) {
        $viagem = Viagem::create([
            'titulo_viagem' => $titulo_viagem,
            'desc_viagem' => $desc_viagem,
            'cod_dificuldade' => $cod_dificuldade,
            'duracao_viagem' => $duracao_viagem,
            'vagas_viagem' => $vagas_viagem,
            'preco_viagem' => $preco2,
            "status_viagem" => 1,
        ]);

        Destinosviagem::create([
            "cod_viagens_dv" => $viagem->id,
            "cod_destinos_dv" => $cod_destino,
        ]);

        Tipoviagem_viagens::create([
            "cod_viagens" => $viagem->id,
            "cod_tipoviagem" => $cod_tipoviagem,
        ]);

        Etinerarioviagem::create([
            "cod_viagens_ev" => $viagem->id,
            "dia_etinerarioViagem" => $dia_itinerario,
            "desc_etinerarioViagem" => $desc_itinerario,
        ]);
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
