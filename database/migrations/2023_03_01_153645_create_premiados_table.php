<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premiados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->date('fecha_boda');
            $table->string('nombre')->nullable();
            $table->string('telefono')->nullable();
            $table->string('contacto2_nombre')->nullable();
            $table->string('contacto2_telefono')->nullable();
            $table->longText('descripcion')->nullable();
            $table->string('lugar_boda')->nullable();
            $table->string('horario_boda')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premiados');
    }
}
