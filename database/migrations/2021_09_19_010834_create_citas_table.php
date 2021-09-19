<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->dateTime('date');
            $table->timestamps();
            $table->unsignedBigInteger('veterinario_id');
            $table->foreign('veterinario_id')->references('id')->on('veterinarios')->onDelete('cascade');
            $table->unsignedBigInteger('agenda_id');
            $table->foreign('agenda_id')->references('id')->on('agendas')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}