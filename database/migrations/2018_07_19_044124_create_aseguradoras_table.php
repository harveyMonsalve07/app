<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAseguradorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aseguradoras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nit')->unique();
            $table->string('nombre');
            $table->integer('cobertura')->unsigned()->nullable();
            $table->string('numero_poliza')->nullable();
            $table->date('vence_poliza')->nullable();
            $table->boolean('activa')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aseguradoras');
    }
}
