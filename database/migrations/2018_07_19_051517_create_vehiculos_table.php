<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa')->unique();
            $table->integer('matricula_ciudad_id')->unsigned();
            $table->date('fecha_matricula');
            $table->tinyInteger('servicio_tipo_id')->unsigned();
            $table->smallInteger('marca_id')->unsigned();
            $table->tinyInteger('vehiculo_tipo_id')->unsigned();
            $table->tinyInteger('carroceria_tipo_id')->unsigned();
            $table->smallInteger('color_id')->unsigned();
            $table->tinyInteger('configuracion_id')->unsigned();
            $table->tinyInteger('tipo_combustible_id')->unsigned();
            $table->string('tarjeta_propiedad');
            $table->string('tarjeta_operacion')->nullable();
            $table->date('expedicion_tarjeta_operacion')->nullable();
            $table->date('vence_tarjeta_operacion')->nullable();
            $table->integer('modelo');
            $table->string('linea');
            $table->string('numero_de_chasis');
            $table->string('numero_de_motor');
            $table->string('numero_de_serie')->nullable();
            $table->tinyInteger('capacidad_de_pasajeros')->unsigned();
            $table->integer('cilindraje')->unsigned();
            $table->integer('puertas')->unsigned();
            $table->string('observaciones')->nullable();
       
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
        Schema::dropIfExists('vehiculos');
    }
}
