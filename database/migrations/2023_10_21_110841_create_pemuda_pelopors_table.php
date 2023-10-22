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
        Schema::create('pemuda_pelopors', function (Blueprint $table) {
            $table->id('id_pemuda');
            $table->string('foto')->nullable();
            $table->string('ttl')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan_akhir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('status_nikah')->nullable();
            $table->string('data_keluarga')->nullable();
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
        Schema::dropIfExists('pemuda_pelopors');
    }
};
