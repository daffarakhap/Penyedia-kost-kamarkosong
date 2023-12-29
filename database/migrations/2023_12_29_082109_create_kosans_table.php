<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kosans', function (Blueprint $table) {
            $table->id();
            $table->String('nama_kos');
            $table->String('fasilitas');
            $table->String('luas_kamar');
            $table->String('ket_biaya_lain');
            $table->String('alamat');
            $table->integer('NoWa');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->String('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosans');
    }
};
