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
        Schema::create('User', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('username')->unique();
            $table->string('id_amil');
            $table->string('password');
            $table->rememberToken();
            $table->datetime('last_login_date')->nullable();
            $table->timestamp('date_created')->usercurrent();
            $table->boolean('aktiv');
        });
        Schema::table('User', function (Blueprint $table) {
            $table->foreign('id_amil')->references('id_amil')->on('data_amil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
