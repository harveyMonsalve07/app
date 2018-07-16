<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('personas', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('numero_identificacion')->unique();
			$table->tinyInteger('documento_tipo_id')->unsigned();
			$table->smallInteger('documento_ciudad_id')->unsigned();
			$table->string('nombre');
			$table->string('primer_nombre')->nullable();
			$table->string('segundo_nombre')->nullable();
			$table->string('primer_apellido')->nullable();
			$table->string('segundo_apellido')->nullable();
			$table->smallInteger('ciudad_id')->unsigned();
			$table->string('direccion');
			$table->integer('telefono')->nullable();
			$table->string('email')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('personas');
	}
}
