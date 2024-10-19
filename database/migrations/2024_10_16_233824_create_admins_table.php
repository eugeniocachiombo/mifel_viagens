<?php

use App\Models\Admin;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nome_admin', 100)->nullable();
            $table->string('sobrenome_admin', 100)->nullable();
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('id_usuario')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        $user = User::create([
            'name' => "Fredy Ferreira",
            'email' => "fredyferreira@mifelviagens.com",
            'telefone' => "921465533",
            'password' => Hash::make("123456"),
            'id_acesso' => 2,
        ]);

        Admin::create([
            'nome_admin' => "Fredy",
            'sobrenome_admin' => "Ferreira",
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
        Schema::dropIfExists('admins');
    }
}
