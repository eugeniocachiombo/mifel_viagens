<?php

use App\Models\Pacotehospedagem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacotehospedagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotehospedagems', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_pacoteHospedagem', 50)->default('0');
            $table->string('desc_pacoteHospedagem', 200)->default('0');
            $table->float('preco_pacoteHospedagem')->default(1);
            $table->integer('status_pacoteHospedagem')->default(1);
            $table->integer('max_qtd_pessoas')->nullable();
            $table->timestamps();
        });
        $this->autoCadastrar("Hospedagem Hotel A", "...", rand(10000.00,100000.00), rand(1,3));
        $this->autoCadastrar("Hospedagem Hotel B", "...", rand(10000.00,100000.00), rand(1,3));
        $this->autoCadastrar("Hospedagem Hotel C", "...", rand(10000.00,100000.00), rand(1,3));
        $this->autoCadastrar("Hospedagem Hotel D", "...", rand(10000.00,100000.00), rand(1,3));
    }

    public function autoCadastrar($titulo, $desc, $preco, $qtd)
    {
        Pacotehospedagem::create([
            "titulo_pacoteHospedagem" => $titulo,
            "desc_pacoteHospedagem" => $desc,
            "preco_pacoteHospedagem" => $preco,
            "max_qtd_pessoas" => $qtd,
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacotehospedagems');
    }
}
