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
            $table->id();
            $table->dateTime('tgldonasi');
            $table->foreignId('donatur')->references('id_donatur')->on('donatur');
            $table->string('statusdonasi');
            $table->bigInteger('hp');
            $table->string('email');
            $table->string('atasnama');
            $table->string('program');
            $table->bigInteger('nominal');
            $table->string('statuspembyaran');
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
