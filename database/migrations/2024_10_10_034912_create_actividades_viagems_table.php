<?php

use App\Models\ActividadesViagem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades_viagems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_viagens')->default(0);
            $table->unsignedBigInteger('cod_actividades')->default(0);
            $table->unsignedInteger('status_actividadesViagem')->default(1);

            $table->foreign('cod_viagens')
                ->references('id')->on('viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cod_actividades')
                ->references('id')->on('actividades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        $this->cadastrar(2, 2, 1);
        $this->cadastrar(5, 1, 1);
        $this->cadastrar(5, 2, 1);
        $this->cadastrar(2, 1, 1);
    }

    public function cadastrar($cod_viagens, $cod_actividades, $status_actividadesViagem)
    {
        ActividadesViagem::create([
            "cod_viagens" => $cod_viagens,
            "cod_actividades" => $cod_actividades,
            "status_actividadesViagem" => $status_actividadesViagem,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades_viagems');
    }
}
