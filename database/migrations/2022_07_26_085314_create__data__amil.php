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
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('no_ktp')->unique();
            $table->string('nama_lengkap');
            $table->string('nomor_hp')->unique();
            $table->string('email')->unique();
            $table->string('cabang_rumahzakat')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('no_rekening')->nullable()->unique();
            $table->string('atas_nama')->nullable();
            $table->string('surat_pernyataan')->nullable();
            $table->string('ktp')->nullable();
            $table->boolean('aktiv');
            $table->string('alamat')->nullable();
            $table->timestamp('date_created')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
