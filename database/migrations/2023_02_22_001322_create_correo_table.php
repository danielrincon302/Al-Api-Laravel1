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
        Schema::create('Correo', function (Blueprint $table) {
            $table->id('f300_id');
            $table->string('f300_email');
            $table->string('f300_pwd');
            $table->string('f300_msj');
            $table->string('f300_smtp');
            $table->timestamps();
            $table->unsignedBigInteger('fuser_id_fk');
            $table->foreign('fuser_id_fk')
              ->references('id')->on('users')->onDelete('cascade');
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
