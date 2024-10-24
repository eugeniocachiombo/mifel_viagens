<?php

use App\Models\Etinerarioviagem;
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
            $table->id('id');
            $table->unsignedBigInteger('cod_viagens_ev')->nullable();
            $table->integer('dia_etinerarioViagem')->default(0);
            $table->text('desc_etinerarioViagem')->default("nenhuma");
            $table->integer('status_etinerario')->default(1);
            $table->timestamps();

            $table->foreign('cod_viagens_ev')
                ->references('id')->on('viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index('cod_viagens_ev');
        });

        $this->cadastrar(2, 1, 'Chegada e início da trilha', 1);
        $this->cadastrar(2, 2, 'Visita à caverna', 1);
        $this->cadastrar(2, 3, 'Sentir a brisa do mar e comer peixe a lagostosa', 1);
    }

    public function cadastrar($cod_viagens_ev, $dia_etinerarioViagem, $desc_etinerarioViagem, $status_etinerario)
    {
        Etinerarioviagem::create([
            "cod_viagens_ev" => $cod_viagens_ev,
            "dia_etinerarioViagem" => $dia_etinerarioViagem,
            "desc_etinerarioViagem" => $desc_etinerarioViagem,
            "status_etinerario" => $status_etinerario,
        ]);
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
