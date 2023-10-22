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
        Schema::create('okps', function (Blueprint $table) {
            $table->id('id_okp');
            $table->string('singkatan')->nullable();
            $table->string('nama_jenjang')->nullable();
            $table->string('kategori_org')->nullable();
            $table->string('bentuk_org')->nullable();
            $table->string('hinpun_knpi')->nullable();
            $table->string('alamat_jln')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('mulai_pengurusan')->nullable();
            $table->string('akhir_pengurusan')->nullable();
            $table->bigInteger('id_user')->nullable();
            $table->bigInteger('id_data')->nullable();
            $table->bigInteger('id_ket_umum')->nullable();
            $table->bigInteger('id_skre_umum')->nullable();
            $table->bigInteger('id_bend_umum')->nullable();
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
        Schema::dropIfExists('okps');
    }
};
