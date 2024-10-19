<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacotehospedagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotehospedagems', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo_pacoteHospedagem', 50)->default('0');
            $table->string('desc_pacoteHospedagem', 200)->default('0');
            $table->float('preco_pacoteHospedagem')->default(1);
            $table->integer('status_pacoteHospedagem')->default(1);
            $table->integer('max_qtd_pessoas')->nullable();
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
        Schema::dropIfExists('pacotehospedagems');
    }
}
