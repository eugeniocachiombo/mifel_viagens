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
            $table->id('id'); 
            $table->unsignedBigInteger('cod_viagem');
            $table->date('data_resevada')->nullable(); 
            $table->integer('num_viajantes')->default(1);
            $table->float('total_reserva')->nullable(); 
            $table->enum('status_reservas', ['Pendente', 'Reservado', 'Finalizada'])
            ->default('Pendente');
            $table->integer('status_pgt_reserva');
            $table->string('cod_reserva')->nullable(); 
            $table->unsignedBigInteger('cod_refeicao_reserva')->nullable(); 
            $table->unsignedBigInteger('cod_hospedagem_reserva')->nullable(); 
            $table->unsignedBigInteger('id_usuario')->nullable(); 
            $table->timestamp('Data_Criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('Data_Atualizacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            
            $table->index('cod_viagem');
            $table->index('cod_refeicao_reserva', 'idrefeicao_reserva');
            $table->index('cod_hospedagem_reserva');
            
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
            $table->foreign('id_usuario')
                  ->references('id')
                  ->on('users')
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
