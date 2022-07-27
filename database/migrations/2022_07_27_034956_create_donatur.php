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
        Schema::create('Donatur', function (Blueprint $table) {
            $table->id('id_donatur');
            $table->string('nama');
            $table->bigInteger('nomorhp');
            $table->string('email');
            $table->foreignId('id_amil')->references('id_amil')->on('user');
            $table->timestamp('date_registrasi')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donatur');
    }
};
