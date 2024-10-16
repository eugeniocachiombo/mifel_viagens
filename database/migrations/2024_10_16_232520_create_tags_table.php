<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id('id'); // Auto-incrementing id with custom name
            $table->string('titulo_tag', 150)->charset('utf8mb4')->collation('utf8mb4_0900_ai_ci')->nullable(); // Allows NULL values
            $table->integer('cod_viagem')->nullable(); // Allows NULL values
            
            // Primary key declaration (optional since it's already done by $table->id())
            $table->primary('id_tag');

            // Index
            $table->index('cod_viagem');

            // Foreign key constraint
            $table->foreign('cod_viagem')
                  ->references('id')
                  ->on('viagems')
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
        Schema::dropIfExists('tags');
    }
}
