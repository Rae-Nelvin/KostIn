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
            $table->enum('tipe_kost', ['Male', 'Female', 'Campur']);
            $table->integer('jumlah_kamar');
            $table->integer('jumlah_penghuni');
            $table->string('ukuran_kamar');
            $table->string('jatuh_tempo');
            $table->unsignedBigInteger('alamat_id');
            $table->foreign('alamat_id')->references('id')->on('alamat_details')->onDelete('cascade');
            $table->integer('favourites')->default(0);
            $table->unsignedBigInteger('cover_id');
            $table->foreign('cover_id')->references('id')->on('pictures')->onDelete('cascade');
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
