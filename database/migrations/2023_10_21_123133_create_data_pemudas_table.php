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
        Schema::create('data_pemudas', function (Blueprint $table) {
            $table->id('id_data_pemuda');
            $table->bigInteger('pemuda_satu')->nullable();
            $table->bigInteger('pemuda_dua')->nullable();
            $table->bigInteger('penc_kerja')->nullable();
            $table->bigInteger('pas_hiv')->nullable();
            $table->bigInteger('oat_hiv')->nullable();
            $table->bigInteger('wira_usaha_muda')->nullable();
            $table->bigInteger('angota_okp')->nullable();
            $table->bigInteger('jum_okp')->nullable();
            $table->bigInteger('curanmor')->nullable();
            $table->bigInteger('narkoba')->nullable();
            $table->bigInteger('pembunuhan')->nullable();
            $table->bigInteger('osis')->nullable();
            $table->bigInteger('bem')->nullable();
            $table->bigInteger('jumlah')->nullable();
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
        Schema::dropIfExists('data_pemudas');
    }
};
