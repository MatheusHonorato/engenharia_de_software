<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_aluno');
            $table->integer('periodo')->default('0');
            $table->string('telefone')->default('');
            $table->string('bairro')->default('');
            $table->integer('idade')->default('0');
            $table->string('rua')->default('');
            $table->string('nacionalidade')->default('');
            $table->integer('numero')->default('0');
            $table->string('cidade')->default('');
            $table->string('estado')->default('');
            $table->string('idiomas')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_alunos');
    }
}
