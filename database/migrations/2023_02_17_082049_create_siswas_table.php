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
        Schema::create('siswas', function (Blueprint $table) {
            $table->char('nisn')->unique();
            $table->char('nis')->unique();
            $table->string('nama');
            $table->BigInteger('id_kelas')->unsigned();
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            $table->text('alamat');
            $table->string('no_telp');
            $table->BigInteger('id_spp')->unsigned();
            $table->foreign('id_spp')->references('id_spp')->on('spps');
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
        Schema::dropIfExists('siswas');
    }
};
