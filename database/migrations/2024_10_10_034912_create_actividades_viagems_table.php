<?php

use App\Models\Actividade;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades_viagems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_viagens')->default(0);
            $table->unsignedBigInteger('cod_actividades')->default(0);
            $table->unsignedInteger('status_actividadesViagem')->default(1);

            $table->foreign('cod_viagens')
                ->references('id')->on('viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cod_actividades')
                ->references('id')->on('actividades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        $this->cadastrar('Surf', 'Aula de surf na Praia do Futuro', 'surf.jpg', 1);
        $this->cadastrar('Trilha', 'Caminhada na Serra da Estrela', 'trilha.jpg', 1);
    }

    public function cadastrar($nome_actividade, $desc_actividade, $img_actividade, $status_actividade)
    {
        Actividade::create([
            "nome_actividade" => $nome_actividade,
            "desc_actividade" => $desc_actividade,
            "img_actividade" => $img_actividade,
            "status_actividade" => $status_actividade,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades_viagems');
    }
}
