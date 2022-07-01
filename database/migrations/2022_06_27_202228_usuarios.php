<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\SchemaState;
use Illuminate\Support\Facades\Schema;
use Nette\Schema\Schema as SchemaSchema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**Create */
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gerencia');
            $table->string('cargo');
            $table->string('nombre');
            $table->string('appaterno');
            $table->string('apmaterno');
            $table->string('carnet');
            $table->string('face');
            $table->string('insta');
            $table->string('twi');
            $table->string('regional');
            $table->string('cel');
            $table->string('email');

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
        //
    }
}
