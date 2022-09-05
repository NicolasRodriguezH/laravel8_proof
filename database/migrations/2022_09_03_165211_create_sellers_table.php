<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('coddep');
            $table->string('codmun');
            $table->string('codzon');
            $table->string('codpuesto');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('puesto');
            $table->string('mesa');
            $table->string('codpar');
            $table->string('cedula')->nullable();
            $table->string('nombre')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('telefono')->nullable();
            $table->string('codescru');
            $table->string('codcor');
            $table->string('status');
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
        Schema::dropIfExists('sellers');
    }
}
