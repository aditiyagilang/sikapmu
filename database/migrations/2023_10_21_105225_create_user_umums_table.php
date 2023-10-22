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
        Schema::create('user_umums', function (Blueprint $table) {
            $table->id('id_user_umum');
            $table->string('foto')->nullable();
            $table->string('ttl')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan_akhir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('status_nikah')->nullable();
            $table->bigInteger('id_user')->nullable();
            $table->bigInteger('id_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_umums');
    }
};
