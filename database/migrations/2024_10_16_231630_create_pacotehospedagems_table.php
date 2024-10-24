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
            $table->text('desc_pacoteHospedagem')->nullable();
            $table->float('preco_pacoteHospedagem')->default(1);
            $table->integer('status_pacoteHospedagem')->default(1);
            $table->integer('max_qtd_pessoas')->nullable();
            $table->timestamps();
        });

        $this->autoCadastrar('Básico - 1 Solteiro', 'N/A', 15000.22, 1);
        $this->autoCadastrar('Básico - 2 Solteiro', 'N/A', 22000.72, 2);
        $this->autoCadastrar('Básico - 3 Solteiro', 'N/A', 30000.14, 3);
        $this->autoCadastrar('Vip - 1 King Size', 'N/A', 25000.18, 2);
        $this->autoCadastrar('Vip - 2 King Size', 'N/A', 50000.19, 4);
        $this->autoCadastrar('Vip - 3  King Size', 'N/A', 750000.52, 6);
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
