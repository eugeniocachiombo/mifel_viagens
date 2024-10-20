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
            $table->text('desc_destino')->nullable();
            $table->string('img_destino', 150)->nullable();
            $table->integer('status_destino')->default(1);
            $table->timestamps();
        });


        $this->createDestino("Luanda", "Luanda é a capital de Angola, situada na costa atlântica do país. É uma cidade vibrante e em crescimento, marcada por contrastes entre áreas modernas e tradicionais. O porto de Luanda é um dos mais importantes da região.", "assets/images/provincias/Luanda.jpg");
        $this->createDestino("Benguela", "Benguela é uma cidade costeira de Angola, conhecida por suas belas praias e clima ameno. É um importante centro econômico e cultural, com uma rica história colonial.", "assets/images/provincias/benguela.jpg");
        $this->createDestino("Huíla", "Huíla é uma província de Angola, localizada no sul do país. Sua capital, Lubango, é famosa pela impressionante Serra da Leba e pela estátua do Cristo Rei, que oferece vistas panorâmicas deslumbrantes.", "assets/images/provincias/huila.jpg");
        $this->createDestino("Namibe", "Namibe é uma província costeira de Angola, conhecida por suas impressionantes paisagens desérticas e litoral deslumbrante. A capital, também chamada Namibe, destaca-se por suas praias, como a Praia do Dúbia.", "assets/images/provincias/namibe.jpg");
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
