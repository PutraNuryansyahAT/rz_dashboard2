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
        Schema::table('transaksi', function (Blueprint $table) {

            $table->dateTime('tgldonasi');
            $table->string('statusdonasi');
            $table->string('donatur');
            $table->bigInteger('hp');
            $table->string('email');
            $table->string('atasnama');
            $table->string('program');
            $table->bigInteger('nominal');
            $table->foreign('affiliate')->references('id')->on('users');
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
        Schema::table('transaksi', function (Blueprint $table) {
            //
        });
    }
};
