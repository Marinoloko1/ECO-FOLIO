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
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tarjeta");
            $table->string("nombre");
            $table->string("carrera");
            $table->string("matricula");
            $table->string("grupo");
            $table->integer("usos");
            $table->integer("intentos");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
};