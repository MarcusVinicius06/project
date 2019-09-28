<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('turma', 100);
            $table->date('ano_ingresso');
            $table->date('ano_fomacao');
            $table->unsignedBigInteger('modalidade_id');
            $table->unsignedBigInteger('egresso_id');
            $table->timestamps();

            $table->foreign('modalidade_id')->references('id')->on('modalidades');
            $table->foreign('egresso_id')->references('id')->on('egressos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
