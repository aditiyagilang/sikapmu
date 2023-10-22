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
        Schema::create('file_lokers', function (Blueprint $table) {
            $table->id('id_file_loker');
            $table->string('file')->nullable();
            $table->bigInteger('id_user')->nullable();
            $table->bigInteger('id_loker')->nullable();
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
        Schema::dropIfExists('file_lokers');
    }
};
