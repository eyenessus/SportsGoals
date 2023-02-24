<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('groupId')->nullable();
            $table->string('title');
            $table->string('description');
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->dateTime('startRecur')->nullable();
            $table->dateTime('endRecur')->nullable();
            $table->string('textColor')->default('white');
            $table->json('daysOfWeek')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
