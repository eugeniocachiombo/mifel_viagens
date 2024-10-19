<?php

use App\Models\Pacoterefeicao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacoterefeicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacoterefeicaos', function (Blueprint $table) {
            $table->id('id'); 
            $table->string('titulo_pacoteRefeicao');
            $table->string('desc_pacoteRefeicao');
            $table->float('preco_pacoteRefeicao')->nullable(); 
            $table->integer('status_pacoteRefeicao')->default(1);
            $table->timestamps();
        });

        $this->autoCadastrar("Refeição A", "...", rand(1000.00,10000.00));
        $this->autoCadastrar("Refeição B", "...", rand(1000.00,10000.00));
        $this->autoCadastrar("Refeição C", "...", rand(1000.00,10000.00));
        $this->autoCadastrar("Refeição D", "...", rand(1000.00,10000.00));
    }

    public function autoCadastrar($titulo, $desc, $preco)
    {
        Pacoterefeicao::create([
            "titulo_pacoteRefeicao" => $titulo,
            "desc_pacoteRefeicao" => $desc,
            "preco_pacoteRefeicao" => $preco
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacoterefeicaos');
    }
}
