<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDificuldadeViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dificuldade_viagems', function (Blueprint $table) {
            $table->id();
            $table->string("nome_dificuldadeViagem");
            $table->string("desc_dificuldadeViagem");
            $table->integer("status_dificuldadeViagem");
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
        Schema::dropIfExists('dificuldade_viagems');
    }
}
