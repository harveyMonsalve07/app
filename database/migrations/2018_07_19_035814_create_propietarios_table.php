<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persona_id');
            $table->tinyInteger('banco_id')->unsigned()->nullable();
            $table->string('cuenta_banco')->nullable();
            $table->tinyInteger('cuenta_tipo_id')->unsigned()->nullable();
            $table->string('titular_cuenta_banco')->nullable();
            $table->integer('representante_legal_id')->unsigned()->nullable();
            $table->integer('representante_suplente_id')->unsigned()->nullable();
            $table->text('descripcion')->nullable();
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
        Schema::dropIfExists('propietarios');
    }
}
