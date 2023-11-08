<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soporte', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('trabajo');
            $table->integer('monto');
            $table->date('fecha');
            $table->string('telefono');
            $table->string('correo');
            $table->string('trabajo_futuro');
            $table->date('fecha_futura');
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
        Schema::dropIfExists('soporte');
    }
}
