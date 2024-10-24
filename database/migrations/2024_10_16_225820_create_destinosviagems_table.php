<?php

use App\Models\Destinosviagem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinosviagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinosviagems', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('cod_viagens_dv')->nullable();
            $table->unsignedBigInteger('cod_destinos_dv')->nullable();
            $table->integer('status_destinosViagem')->default(1);

            $table->foreign('cod_viagens_dv')
                ->references('id')->on('viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cod_destinos_dv')
                ->references('id')->on('destinos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index('cod_viagens_dv');
            $table->index('cod_destinos_dv');
            $table->timestamps();
        });

        $this->cadastrar(1, 1, 1);
        $this->cadastrar(2, 1, 1);
        $this->cadastrar(3, 1, 1);
        $this->cadastrar(4, 1, 1);
        $this->cadastrar(5, 1, 1);
        $this->cadastrar(6, 1, 1);
        $this->cadastrar(7, 1, 1);
        $this->cadastrar(8, 1, 1);

        $this->cadastrar(1, 2, 1);
        $this->cadastrar(2, 2, 1);
        $this->cadastrar(3, 2, 1);
        $this->cadastrar(4, 2, 1);
        $this->cadastrar(5, 2, 1);
        $this->cadastrar(6, 2, 1);
        $this->cadastrar(7, 2, 1);
        $this->cadastrar(8, 2, 1);

        $this->cadastrar(1, 3, 1);
        $this->cadastrar(2, 3, 1);
        $this->cadastrar(3, 3, 1);
        $this->cadastrar(4, 3, 1);
        $this->cadastrar(5, 3, 1);
        $this->cadastrar(6, 3, 1);
        $this->cadastrar(7, 3, 1);
        $this->cadastrar(8, 3, 1);

        $this->cadastrar(1, 4, 1);
        $this->cadastrar(2, 4, 1);
        $this->cadastrar(3, 4, 1);
        $this->cadastrar(4, 4, 1);
        $this->cadastrar(5, 4, 1);
        $this->cadastrar(6, 4, 1);
        $this->cadastrar(7, 4, 1);
        $this->cadastrar(8, 4, 1);
    }

    public function cadastrar($cod_viagens_dv, $cod_destinos_dv, $status_destinosViagem)
    {
        Destinosviagem::create([
            "cod_viagens_dv" => $cod_viagens_dv,
            "cod_destinos_dv" => $cod_destinos_dv,
            "status_destinosViagem" => $status_destinosViagem,
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinosviagems');
    }
}
