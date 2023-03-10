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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->integer('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->char('nis');
            $table->foreign('nis')->references('nis')->on('siswas');
            $table->string('spp_bulan');
            $table->string('id_spp');
            $table->integer('jumlah_bayar');
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
        Schema::dropIfExists('pembayarans');
    }
};
