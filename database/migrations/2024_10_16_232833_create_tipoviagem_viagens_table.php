<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoviagemViagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoviagem_viagens', function (Blueprint $table) {
            $table->id('id'); // Auto-incrementing id with custom name
            $table->integer('cod_viagens_tv_v')->nullable(); // Allows NULL values
            $table->integer('cod_tipoviagem_tv_v')->nullable(); // Allows NULL values

            // Indexes
            $table->index('cod_viagens_tv_v');
            $table->index('cod_tipoviagem_tv_v');

            // Foreign key constraints
            $table->foreign('cod_viagens_tv_v')
                  ->references('id')
                  ->on('viagems')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('cod_tipoviagem_tv_v')
                  ->references('id')
                  ->on('tipoviagems')
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
        Schema::dropIfExists('tipoviagem_viagens');
    }
}
