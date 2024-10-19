<?php

use App\Models\Tipoviagem;
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
            $table->id('id'); 
            $table->string('nome_tipoViagem', 150)->default('0');
            $table->string('desc_tipoViagem', 150)->default('0');
            $table->integer('status_tipoViagem')->default(1);
            $table->timestamps();
        });

        Tipoviagem::create(["nome_tipoViagem" => "Carro"]);
        Tipoviagem::create(["nome_tipoViagem" => "Avião"]);
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
