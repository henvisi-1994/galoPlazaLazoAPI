<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulador', function (Blueprint $table) {
            $table->integer('id_simulador')->autoIncrement();
            $table->string('nombre');
            $table->text('enlace');
            $table->integer('id_curso');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
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
        Schema::dropIfExists('simuladors');
    }
};
