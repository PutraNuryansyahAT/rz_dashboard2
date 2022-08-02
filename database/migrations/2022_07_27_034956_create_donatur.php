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
            $table->string('id_donatur')->primary();
            $table->string('nama');
            $table->string('nomorhp');
            $table->string('email');
            $table->string('id_amil');
            $table->timestamp('date_registrasi')->useCurrent();
        });

        Schema::table('Donatur', function (Blueprint $table) {
            $table->foreign('id_amil')->references('id_amil')->on('user');
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
