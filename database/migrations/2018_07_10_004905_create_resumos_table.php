<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('nome');
            $table->string('email_aluno');
            $table->string('foto_aluno')->nullable();
            $table->string('thumb_foto_aluno')->nullable();;
            $table->string('nome_aluno');
            $table->text('descricao');
            $table->enum('trab_final',['S','N']);
            $table->date('data');
            $table->dateTime('hora');
            $table->integer('fk_tema_id')->unsigned();
            $table->foreign('fk_tema_id')->references('id')->on('temas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumos');
    }
}
