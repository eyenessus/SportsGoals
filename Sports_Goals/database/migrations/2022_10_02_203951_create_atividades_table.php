<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_goals', function (Blueprint $table) {
            $table->id();
            $table->string('nomeevento');
            $table->text('descricao');
            $table->date('data');
            $table->time('inicio');
            $table->time('fim');
            $table->integer('repetir');
            $table->integer('intervalo') ->nullable();
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
        Schema::dropIfExists('atividades');
    }
}
