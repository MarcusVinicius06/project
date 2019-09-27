<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egressos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cpf', 11);
            $table->string('apelido', 100)->nullable();
            $table->integer('numero_filhos');
            $table->string('celular', 11);
            $table->string('estado_civil', 50);
            $table->string('facebook');
            $table->unsignedBigInteger('endereco_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('curso_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egressos');
    }
}
