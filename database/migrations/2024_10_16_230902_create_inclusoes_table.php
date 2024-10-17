<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInclusoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inclusoes', function (Blueprint $table) {
            $table->id(); // Auto-incrementing id
            $table->unsignedBigInteger('cod_viagens_inclusoes')->default(0);
            $table->string('nome_inclusoes', 150)->default('0');
            $table->integer('status_inclusoes')->default(1);
            
            // Foreign key constraint
            $table->foreign('cod_viagens_inclusoes')
                  ->references('id')
                  ->on('viagems')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            // Index
            $table->index('cod_viagens_inclusoes');
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
        Schema::dropIfExists('inclusoes');
    }
}
