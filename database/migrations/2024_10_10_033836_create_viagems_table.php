<?php

use App\Models\Viagem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagems', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_viagem')->default('0');
            $table->text('desc_viagem')->default("nenhuma");
            $table->unsignedBigInteger('cod_dificuldade')->nullable();
            $table->integer('EmDestaque_viagem')->default(0);
            $table->integer('duracao_viagem')->default(1);
            $table->integer('vagas_viagem')->nullable();
            $table->decimal('preco_viagem', 10, 2)->nullable();
            $table->integer('status_viagem')->default(1);
            $table->integer('estrelas_viagem')->default(1);

            $table->foreign('cod_dificuldade')
                ->references('id')->on('dificuldade_viagems')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
        $this->cadastrarViagens();
    }

    public function cadastrarViagens()
    {
        $viagens = [
            [
                'titulo_viagem' => 'Aventura na Praia do Futuro',
                'desc_viagem' => 'Descubra o icônico Vale do Loire nesta viagem de dia inteiro saindo de Tours. Visite 2 vinícolas, prove vinhos locais e pare na pitoresca Chinon, conhecida por seus vinhos tintos e arquitetura renascentista.',
                'cod_dificuldade' => 1,
                'EmDestaque_viagem' => 1,
                'duracao_viagem' => 7,
                'vagas_viagem' => 20,
                'preco_viagem' => 25000,
                'status_viagem' => 1,
                'estrelas_viagem' => 1,
            ],
            [
                'titulo_viagem' => 'Exploração na Serra da Estrela',
                'desc_viagem' => 'Descubra o icônico Vale do Loire nesta viagem de dia inteiro saindo de Tours. Visite 2 vinícolas, prove vinhos locais e pare na pitoresca Chinon, conhecida por seus vinhos tintos e arquitetura renascentista.',
                'cod_dificuldade' => 2,
                'EmDestaque_viagem' => 0,
                'duracao_viagem' => 10,
                'vagas_viagem' => 15,
                'preco_viagem' => 35000,
                'status_viagem' => 1,
                'estrelas_viagem' => 1,
            ],
            [
                'titulo_viagem' => 'Exploração na Serra da Estrela',
                'desc_viagem' => 'Descubra o icônico Vale do Loire nesta viagem de dia inteiro saindo de Tours. Visite 2 vinícolas, prove vinhos locais e pare na pitoresca Chinon, conhecida por seus vinhos tintos e arquitetura renascentista.',
                'cod_dificuldade' => 2,
                'EmDestaque_viagem' => 0,
                'duracao_viagem' => 10,
                'vagas_viagem' => 15,
                'preco_viagem' => 35000,
                'status_viagem' => 1,
                'estrelas_viagem' => 1,
            ],
            [
                'titulo_viagem' => 'Exploração na Serra da Estrela',
                'desc_viagem' => 'Descubra o icônico Vale do Loire nesta viagem de dia inteiro saindo de Tours. Visite 2 vinícolas, prove vinhos locais e pare na pitoresca Chinon, conhecida por seus vinhos tintos e arquitetura renascentista.',
                'cod_dificuldade' => 2,
                'EmDestaque_viagem' => 0,
                'duracao_viagem' => 10,
                'vagas_viagem' => 15,
                'preco_viagem' => 35000,
                'status_viagem' => 1,
                'estrelas_viagem' => 1,
            ],
            [
                'titulo_viagem' => 'Escalada ao monte Everest',
                'desc_viagem' => 'Descubra o icônico Vale do Loire nesta viagem de dia inteiro saindo de Tours. Visite 2 vinícolas, prove vinhos locais e pare na pitoresca Chinon, conhecida por seus vinhos tintos e arquitetura renascentista.',
                'cod_dificuldade' => 2,
                'EmDestaque_viagem' => 0,
                'duracao_viagem' => 10,
                'vagas_viagem' => 15,
                'preco_viagem' => 35000,
                'status_viagem' => 1,
                'estrelas_viagem' => 1,
            ],
            [
                'titulo_viagem' => 'Exploração na Serra da Estrela',
                'desc_viagem' => 'Descubra o icônico Vale do Loire nesta viagem de dia inteiro saindo de Tours. Visite 2 vinícolas, prove vinhos locais e pare na pitoresca Chinon, conhecida por seus vinhos tintos e arquitetura renascentista.',
                'cod_dificuldade' => 2,
                'EmDestaque_viagem' => 0,
                'duracao_viagem' => 10,
                'vagas_viagem' => 15,
                'preco_viagem' => 35000,
                'status_viagem' => 1,
                'estrelas_viagem' => 1,
            ],
        ];

        foreach ($viagens as $viagem) {
            $this->cadastrar(
                $viagem['titulo_viagem'],
                $viagem['desc_viagem'],
                $viagem['cod_dificuldade'],
                $viagem['EmDestaque_viagem'],
                $viagem['duracao_viagem'],
                $viagem['vagas_viagem'],
                $viagem['preco_viagem'],
                $viagem['status_viagem'],
                $viagem['estrelas_viagem']
            );
        }
    }

    public function cadastrar(
        $titulo_viagem,
        $desc_viagem,
        $cod_dificuldade,
        $EmDestaque_viagem,
        $duracao_viagem,
        $vagas_viagem,
        $preco_viagem,
        $status_viagem,
        $estrelas_viagem
    ) {
        Viagem::create(
            [
                "titulo_viagem" => $titulo_viagem,
                "desc_viagem" => $desc_viagem,
                "cod_dificuldade" => $cod_dificuldade,
                "EmDestaque_viagem" => $EmDestaque_viagem,
                "duracao_viagem" => $duracao_viagem,
                "vagas_viagem" => $vagas_viagem,
                "preco_viagem" => $preco_viagem,
                "status_viagem" => $status_viagem,
                "estrelas_viagem" => $estrelas_viagem,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viagems');
    }
}
