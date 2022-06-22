<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('minucipio',60);
            $table->string('sitio',60);
            $table->string('direccion',60);
            $table->integer('telefono')->length(10);
            $table->string('correo',60);
            $table->string('imagen',191);
            $table->text('descripcion');
            $table->string('tipo_actividad',60);
            $table->time('horario_atencion',6);
            $table->integer('estado')->length(1);
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
        Schema::dropIfExists('sites');
    }
}
