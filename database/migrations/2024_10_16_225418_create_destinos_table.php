<?php

use App\Models\Destino;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class CreateDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_destino', 150)->nullable();
            $table->string('desc_destino', 150)->nullable();
            $table->string('img_destino', 150)->nullable();
            $table->integer('status_destino')->default(1);
            $table->timestamps();
        });


        $this->createDestino("Luanda", "Capital de Angola", "assets/images/provincias/Luanda.jpg");
        $this->createDestino("Benguela", "...", "assets/images/provincias/benguela.jpg");
        $this->createDestino("Huíla", "...", "assets/images/provincias/huila.jpg");
        $this->createDestino("Namibe", "...", "assets/images/provincias/namibe.jpg");
    }

    public function createDestino($nome_destino, $desc_destino, $img_destino)
    {

        if (file_exists($img_destino)) {
            $file = new UploadedFile($img_destino, basename($img_destino));
            $imagePath = Storage::disk('public')->putFile('destinos', $file);
            Destino::create([
                'nome_destino' => $nome_destino,
                'desc_destino' => $desc_destino,
                'img_destino' => $imagePath,
            ]);
        } else {
            throw new Exception("Arquivo não encontrado: $img_destino");
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinos');
    }
}
