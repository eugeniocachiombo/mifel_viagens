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
            $table->text('desc_pacoteRefeicao')->nullable();
            $table->float('preco_pacoteRefeicao')->nullable(); 
            $table->integer('status_pacoteRefeicao')->default(1);
            $table->timestamps();
        });

        $this->autoCadastrar("Nenhum", "", 0);
        $this->autoCadastrar('Básico', 'Café da manhã, almoço e jantar.', rand(1000.00,10000.00));
        $this->autoCadastrar('Composto', 'Tudo e mais alguma coisa, sem limitação de quantidade', rand(1000.00,10000.00));
        $this->autoCadastrar('FastFood ', 'Muita fastfood, como hamburgers, Fahitas, hot-dogs..etc..', rand(1000.00,10000.00));
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
