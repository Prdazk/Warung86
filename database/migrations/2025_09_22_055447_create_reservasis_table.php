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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');                       // Nama pemesan
            $table->integer('jumlah_orang');              // Jumlah orang
            $table->string('pilihan_meja')->nullable()->default('belum ditentukan'); // Pilihan meja
            $table->date('tanggal');                      // Tanggal reservasi
            $table->time('jam');                          // Jam reservasi
            $table->text('catatan')->nullable();          // Catatan opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
