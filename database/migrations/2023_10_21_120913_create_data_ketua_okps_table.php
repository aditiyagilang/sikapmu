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
        Schema::create('data_ketua_okps', function (Blueprint $table) {
            $table->id('id_ket_umum');
            $table->string('nama_ketua')->nullable();
            $table->string('ttl')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('jenkel')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan_akhir')->nullable();
            $table->string('kontak')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('data_ketua_okps');
    }
};
