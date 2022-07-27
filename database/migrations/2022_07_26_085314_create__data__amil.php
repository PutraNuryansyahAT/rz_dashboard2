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
        Schema::create('data_amil', function (Blueprint $table) {
            $table->id('id_amil');
            $table->string('nama_lengkap');
            $table->bigInteger('nomor_hp');
            $table->string('email')->unique();
            $table->boolean('aktiv');
            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_amil');
    }
};
