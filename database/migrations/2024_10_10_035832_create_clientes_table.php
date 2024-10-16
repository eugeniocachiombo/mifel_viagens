<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome_cliente', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('sobrenome_cliente', 100)->nullable()->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->integer('estado_cliente')->default(1);

            $table->foreign('cod_viagens_av')
                ->references('id')->on('viagems')
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
        Schema::dropIfExists('clientes');
    }
}
