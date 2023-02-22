<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('f200_desc');
            $table->timestamps();
            $table->unsignedBigInteger('f100_id_f200_id_fk1');
            $table->foreign('f100_id_f200_id_fk1')
              ->references('f100_id')->on('Deptos')->onDelete('cascade');
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ciudades');
    }
};
