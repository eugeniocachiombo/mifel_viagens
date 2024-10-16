<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasfrequentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntasfrequentes', function (Blueprint $table) {
            $table->id('id'); // Auto-incrementing id with custom name
            $table->string('pergunta', 150)->default('0');
            $table->string('resposta', 500)->default('0');
            $table->string('status_perguntasFrequentes', 500)->default('0');
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
        Schema::dropIfExists('perguntasfrequentes');
    }
}
