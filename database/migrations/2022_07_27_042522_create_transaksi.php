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
        Schema::create('Transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->datetime('date_transaksi');
            $table->foreignId('id_donatur')->references('id')->on('donatur');
            $table->string('atasnama');
            $table->bigInteger('no_hp');
            $table->string('email');
            $table->foreignId('id_program')->references('id_program')->on('program');
            $table->bigInteger('nominal');
            $table->foreignId('id_amil')->references('id_amil')->on('user');
            $table->string('metode_pembayaran');
            $table->string('status_pembayaran');
            $table->timestamp('update_data')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transaksi');
    }
};
