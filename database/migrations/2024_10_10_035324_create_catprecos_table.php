<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatprecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catprecos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome_catPreco', 50)->default('0');
            $table->string('desc_catPreco', 255)->default('0');
            $table->string('faixa_idade', 255)->default('0');
            $table->decimal('preco_catPreco', 10, 2)->nullable(); // Usando decimal para valores monetários
            $table->integer('status_catPreco')->default(1);
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
        Schema::dropIfExists('catprecos');
    }
}
