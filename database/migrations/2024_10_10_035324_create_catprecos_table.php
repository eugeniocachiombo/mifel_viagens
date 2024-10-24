<?php

use App\Models\Catpreco;
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
            $table->text('desc_catPreco')->default("nenhuma");
            $table->string('faixa_idade', 255)->default('0');
            $table->decimal('preco_catPreco', 10, 2)->nullable(); 
            $table->integer('status_catPreco')->default(1);
            $table->timestamps();
        });

        $this->cadastrar('Adulto', 'Preço para adultos', '18-65', 150, 1);
        $this->cadastrar('Criança', 'Preço para crianças', '0-17', 75, 1);
        $this->cadastrar('Idoso', 'Preço para idosos', '65+', 100, 1);
    }

    public function cadastrar($nome_catPreco, $desc_catPreco, $faixa_idade, $preco_catPreco, $status_catPreco)
    {
        Catpreco::create([
            "nome_catPreco" => $nome_catPreco,
            "desc_catPreco" => $desc_catPreco,
            "faixa_idade" => $faixa_idade,
            "preco_catPreco" => $preco_catPreco,
            "status_catPreco" => $status_catPreco,
        ]);
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
