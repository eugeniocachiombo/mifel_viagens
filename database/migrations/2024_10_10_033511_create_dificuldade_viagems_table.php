<?php

use App\Models\DificuldadeViagem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDificuldadeViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dificuldade_viagems', function (Blueprint $table) {
            $table->id();
            $table->string("nome_dificuldadeViagem");
            $table->text("desc_dificuldadeViagem")->default("nenhuma");
            $table->integer("status_dificuldadeViagem")->default(1);
            $table->timestamps();
        });

        DificuldadeViagem::create([
            "nome_dificuldadeViagem" => "Nenhuma",
            "desc_dificuldadeViagem" => "Nenhuma informação",
        ]);

        DificuldadeViagem::create([
            "nome_dificuldadeViagem" => "Dificuldade 1",
            "desc_dificuldadeViagem" => "Dificuldade 2",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dificuldade_viagems');
    }
}
