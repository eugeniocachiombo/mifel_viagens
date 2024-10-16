<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoviagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoviagems', function (Blueprint $table) {
            $table->id('id'); // Auto-incrementing id with custom name
            $table->string('nome_tipoViagem', 150)->default('0');
            $table->string('desc_tipoViagem', 150)->default('0');
            $table->integer('status_tipoViagem')->default(1);
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
        Schema::dropIfExists('tipoviagems');
    }
}
