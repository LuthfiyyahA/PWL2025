<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // membuat tabel t_ukm
    // Tabel ini menyimpan informasi tentang Unit Kegiatan Mahasiswa (UKM)
    public function up(): void
    {
        Schema::create('t_ukm', function (Blueprint $table) {
            $table->id('ukm_id');
            $table->string('nama_ukm', 100)->unique();
            $table->text('deskripsi_ukm')->nullable();
            $table->string('ketua_ukm', 255);
            $table->string('tahun_berdiri', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_ukm');
    }
};