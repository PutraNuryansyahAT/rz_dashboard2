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
        Schema::create('Data_amil', function (Blueprint $table) {
            $table->id('id_amil');
            $table->string('no_ktp')->unique();
            $table->string('nama_lengkap');
            $table->bigInteger('nomor_hp');
            $table->string('email')->unique();
            $table->string('cabang_rumahzakat')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('surat_pernyataan')->nullable();
            $table->string('ktp')->nullable();
            $table->boolean('aktiv');
            $table->timestamp('date_created')->useCurrent();
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
