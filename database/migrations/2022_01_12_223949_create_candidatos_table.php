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
            $table->bigIncrements('id');
            $table->string('cedula');
            $table->string('nombre_completo');
            $table->date('fecha_nacimiento');
            $table->string('numero_movil');
            $table->string('numero_casa')->nullable();
            $table->string('email');
            $table->enum('estado_civil', ['soltero/a', 'casado/a', 'divorciado/a', 'viudo/a']);
            $table->enum('sexo', ['hombre', 'mujer', 'no binario'])->nullable();
            $table->text('direccion')->nullable();
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
        Schema::dropIfExists('candidatos');
    }
}
