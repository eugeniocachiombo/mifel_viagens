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
            $table->unsignedBigInteger('id_pacotehospedagems');
            $table->unsignedBigInteger('id_pacoterefeicaos');
            $table->unsignedBigInteger('id_reserva');

            $table->foreign('id_usuario')
                ->references('id')->on('users')
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
