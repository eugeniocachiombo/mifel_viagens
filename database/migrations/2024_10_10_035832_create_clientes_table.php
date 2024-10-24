<?php

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente', 100)->nullable();
            $table->string('sobrenome_cliente', 100)->nullable();
            $table->integer('estado_cliente')->default(1);
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('id_usuario')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        $this->cadastrar('Dário ', 'De Jesus', 'ddjdj@gmail.com', 'babiba70', '94809823');
        $this->cadastrar('Damaris', 'Isabel', 'damaris@gmail.com', 'overload', '94232324');
        $this->cadastrar('carlos', 'silva', 'carlos.silva@gmail.com', 'babiba70', '93834823');
        $this->cadastrar('Maria', 'Silva', 'maria@gmail.com', 'password123', '923456789');
        $this->cadastrar('João', 'Santos', 'joao@gmail.com', 'password456', '923456788');
    }

    public function cadastrar($nome, $sobrenome, $email, $password, $telefone)
    {
        $user = User::create([
            'name' => "{$nome} {$sobrenome}",
            'email' => $email,
            'telefone' => $telefone,
            'password' => Hash::make($password),
            'id_acesso' => 2,
        ]);

        Cliente::create([
            'nome_cliente' => $nome,
            'sobrenome_cliente' => $sobrenome,
            'id_usuario' => $user->id,
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
