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
            $table->foreignId('id_amil')->references('id')->on('data_amil');
            $table->string('password');
            $table->rememberToken();
            $table->datetime('last_login_date')->nullable();
            $table->timestamp('date_created')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->boolean('aktiv');
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
