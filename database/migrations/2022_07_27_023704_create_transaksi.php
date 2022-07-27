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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->datetime('date_transaksi');
            $table->foregnId('id_donatur')->references('id_donatur')->on('donatur');
            $table->string('atasnama');
            $table->foregnid('id_program')->references('id_program')->on('program');
            $table->bigInteger('nominal');
            $table->foregnid('id_amil')->references('id_amil')->on('data_amil');
            $table->string('metode_pembayaran');
            $table->string('status_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
