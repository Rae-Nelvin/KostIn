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
        Schema::create('kost_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kost_id');
            $table->foreign('kost_id')->references('id')->on('kosts')->onDelete('cascade');
            $table->longText('description');
            $table->string('tipe_kost', 25);
            $table->integer('jumlah_kamar');
            $table->integer('jumlah_penghuni');
            $table->string('ukuran_kamar');
            $table->double('price');
            $table->string('jatuh_tempo');
            $table->unsignedBigInteger('alamat_id');
            $table->foreign('alamat_id')->references('id')->on('alamat_details')->onDelete('cascade');
            $table->integer('favourites')->default(0);
            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kost_details');
    }
};
