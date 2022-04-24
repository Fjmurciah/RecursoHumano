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
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->string('fecharespuesta');
            $table->string('preguntauno');
            $table->string('preguntados');
            $table->string('preguntatres');
            $table->string('preguntacuatro');
            $table->string('preguntacinco');
            $table->string('preguntaseis');
            $table->string('preguntasiete');
            $table->string('preguntaocho');
            $table->foreignId('resultado_id')->references('id')->on('resultado_controllers')->comment('La encuesta a la que pertenece');
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
        Schema::dropIfExists('encuestas');
    }
};
