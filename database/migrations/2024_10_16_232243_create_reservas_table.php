<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('id'); // Auto-incrementing id with custom name
            $table->unsignedBigInteger('cod_viagem');
            $table->date('data_resevada')->nullable(); // Allows NULL values
            $table->integer('num_viajantes')->default(1);
            $table->float('total_reserva')->nullable(); // Allows NULL values
            $table->enum('status_reservas', ['Pendente', 'Reservado', 'Finalizada'])
                  ->default('Pendente');
            $table->integer('status_pgt_reserva');
            $table->unsignedBigInteger('cod_refeicao_reserva')->nullable(); // Allows NULL values
            $table->unsignedBigInteger('cod_hospedagem_reserva')->nullable(); // Allows NULL values
            $table->timestamp('Data_Criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('Data_Atualizacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));

            // Indexes
            $table->index('cod_viagem');
            $table->index('cod_refeicao_reserva', 'idrefeicao_reserva');
            $table->index('cod_hospedagem_reserva');

            // Foreign key constraints
            $table->foreign('cod_refeicao_reserva')
                  ->references('id')
                  ->on('pacoterefeicaos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('cod_viagem')
                  ->references('id')
                  ->on('viagems')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('cod_hospedagem_reserva')
                  ->references('id')
                  ->on('pacotehospedagems')
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
        Schema::dropIfExists('reservas');
    }
}
