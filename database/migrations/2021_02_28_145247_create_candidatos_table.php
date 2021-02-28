<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',160);
            $table->string('sobrenome',160);
            $table->unsignedBigInteger('entrevista_etapa1');
            $table->unsignedBigInteger('entrevista_etapa2');
            $table->unsignedBigInteger('descanso_etapa1');
            $table->unsignedBigInteger('descanso_etapa2');
            $table->timestamps();
        });

        Schema::table('candidatos', function (Blueprint $table) {
            $table->foreign('entrevista_etapa1')->references('id')->on("entrevistas");
            $table->foreign('entrevista_etapa2')->references('id')->on("entrevistas");
            $table->foreign('descanso_etapa1')->references('id')->on("descansos");
            $table->foreign('descanso_etapa2')->references('id')->on("descansos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
