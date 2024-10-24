<?php

use App\Models\Viagem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagems', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_viagem')->default('0');
            $table->text('desc_viagem')->default("nenhuma");
            $table->unsignedBigInteger('cod_dificuldade')->nullable();
            $table->integer('EmDestaque_viagem')->default(0);
            $table->integer('duracao_viagem')->default(1);
            $table->integer('vagas_viagem')->nullable();
            $table->decimal('preco_viagem', 10, 2)->nullable();
            $table->integer('status_viagem')->default(1);
            $table->integer('estrelas_viagem')->default(1);

            $table->foreign('cod_dificuldade')
                ->references('id')->on('dificuldade_viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
        $this->cadastrar('Pacote Mínimo Luanda I', 'Viagem de Avião Para Luanda', rand(1,3), 0, 2, 1, 95866.70, 1, 1);
        $this->cadastrar('Pacote Mínimo Luanda II', 'Viagem de Carro Para Luanda', rand(1,3), 0, 3, 5, 62089.65, 1, 1);
        $this->cadastrar('Pacote Mínimo Benguela I', 'Viagem de Avião Para Benguela', rand(1,3), 0, 5, 4, 66529.98, 1, 1);
        $this->cadastrar('Pacote Mínimo Benguela II', 'Viagem de Carro Para Benguela', 1, 0, 2, 2, 55918.55, 1, 1);
        $this->cadastrar('Pacote Mínimo Huíla I', 'Viagem de Avião Para Huíla', rand(1,3), 0, 4, 4, 91485.11, 1, 1);
        $this->cadastrar('Pacote Mínimo Huíla II', 'Viagem de Carro Para Huíla', rand(1,3), 0, 5, 1, 71501.00, 1, 1);
        $this->cadastrar('Pacote Mínimo Namibe I', 'Viagem de Avião Para Namibe', rand(1,3), 0, 1, 3, 67860.11, 1, 1);
        $this->cadastrar('Pacote Mínimo Namibe II', 'Viagem de Carro Para Namibe', rand(1,3), 0, 4, 3, 94462.71, 1, 1);
    }

    public function cadastrar(
        $titulo_viagem,
        $desc_viagem,
        $cod_dificuldade,
        $EmDestaque_viagem,
        $duracao_viagem,
        $vagas_viagem,
        $preco_viagem,
        $status_viagem,
        $estrelas_viagem
    ) {
        Viagem::create(
            [
                "titulo_viagem" => $titulo_viagem,
                "desc_viagem" => $desc_viagem,
                "cod_dificuldade" => $cod_dificuldade,
                "EmDestaque_viagem" => $EmDestaque_viagem,
                "duracao_viagem" => $duracao_viagem,
                "vagas_viagem" => $vagas_viagem,
                "preco_viagem" => $preco_viagem,
                "status_viagem" => $status_viagem,
                "estrelas_viagem" => $estrelas_viagem,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viagems');
    }
}
