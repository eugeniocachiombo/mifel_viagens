<?php

use App\Models\Actividade;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string("nome_actividade");
            $table->text("desc_actividade")->default("nenhuma");
            $table->string("img_actividade");
            $table->string("status_actividade");
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
        Schema::dropIfExists('actividades');
    }
}
