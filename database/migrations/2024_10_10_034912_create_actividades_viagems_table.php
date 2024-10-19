<?php

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
