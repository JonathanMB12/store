<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstrumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_instrumento', 50);
            $table->string('marca', 20);
            $table->unsignedInteger('precio');
            $table->string('modelo', 7);
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
        Schema::dropIfExists('instrumentos');
    }
}
