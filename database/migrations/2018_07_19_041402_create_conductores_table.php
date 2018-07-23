<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id');
            $table->integer('licencia')->unique();
            $table->date('vencimiento_licencia');
            $table->string('categoria_licencia_id');
            $table->date('fecha_nacimiento');
            $table->tinyInteger('banco_id')->nullable();
            $table->string('cuenta_banco')->nullable();
            $table->tinyInteger('cuenta_tipo_id')->unsigned()->nullable();
            $table->string('titular_cuenta_banco')->nullable();
            $table->string('rh')->nullable();
            $table->string('estado_civil_id');
            $table->string('conyugue')->nullable();
            $table->integer('numero_identificacion_conyugue')->nullable();
            $table->tinyInteger('eps_id')->unsigned()->nullable();
            $table->tinyInteger('arl_id')->unsigned()->nullable();
            $table->tinyInteger('caja_compensacion_id')->unsigned()->nullable();
            $table->tinyInteger('estudios')->unsigned();
            $table->tinyInteger('conduccion')->unsigned();
            $table->tinyInteger('carga')->unsigned();
            $table->tinyInteger('mecanica')->unsigned();
            $table->tinyInteger('peligrosa')->unsigned();
            $table->string('otros')->nullable();
            $table->date('vence_aportes')->nullable();
            $table->date('vence_ocupacional')->nullable();
            $table->date('vence_visiometria')->nullable();
            $table->date('vence_audiometria')->nullable();
            $table->date('vence_psicosensometrico')->nullable();
            $table->date('vence_prueba_teorica')->nullable();
            $table->date('vence_prueba_practica')->nullable();
            $table->date('inicio_contrato');
            $table->date('fin_contrato');
            $table->integer('valor_contrato');
            $table->text('descripcion');
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
        Schema::dropIfExists('conductores');
    }
}
