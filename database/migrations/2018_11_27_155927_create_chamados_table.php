<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->integer('id_u_atendente')->unsigned()->default('1');
            $table->foreign('id_u_atendente')->references('id')->on('users');
            $table->integer('id_u_solicita')->unsigned();
            $table->foreign('id_u_solicita')->references('id')->on('users');
            $table->integer('id_status')->unsigned()->default('1');
            $table->foreign('id_status')->references('id')->on('statuses');
            $table->integer('id_prioridade')->unsigned();
            $table->foreign('id_prioridade')->references('id')->on('prioridades');
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
        Schema::dropIfExists('chamados');
    }
}
