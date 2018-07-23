<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestoDeControlsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('puestos_de_control', function (Blueprint $table) {
		$table->increments('id');
		$table->string('nombre')->nullable();
		$table->integer('ciudad_id')->unsigned();
		$table->string('ubicacion_mapa')->nullable();
		$table->string('operario')->nullable();
		$table->string('telefono')->nullable();
		$table->string('movil')->nullable();
		$table->string('avantel')->nullable();
		$table->string('email')->nullable();
		$table->string('observaciones')->nullable();
		$table->string('password_wap')->nullable();
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
		Schema::dropIfExists('puesto_de_controls');
	}
}
