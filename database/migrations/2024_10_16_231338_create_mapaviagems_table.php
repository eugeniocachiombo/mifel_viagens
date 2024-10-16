<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapaviagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapaviagems', function (Blueprint $table) {
            $table->id(); // Auto-incrementing id
            $table->integer('cod_viagens_mapaViagem')->default(0);
            $table->string('iframe_mapaViagem', 1000)->default('0');
            $table->string('img_mapaViagem', 1000)->default('0');
            $table->integer('status_mapaViagem')->default(1);
            
            // Foreign key constraint
            $table->foreign('cod_viagens_mapaViagem')
                  ->references('id')
                  ->on('viagems')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            // Index
            $table->index('cod_viagens_mapaViagem');
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
        Schema::dropIfExists('mapaviagems');
    }
}
