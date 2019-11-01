<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rua', 255);
            $table->integer('numero');
            $table->string('cidade', 255)->nullable();
            $table->string('bairro', 255);
            $table->string('estado', 100);
            $table->integer('cep');
            $table->unsignedBigInteger('egresso_id');
            $table->timestamps();

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
        Schema::dropIfExists('enderecos');
    }
}
