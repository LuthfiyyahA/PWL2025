<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // membuat tabel anggota
    // Tabel ini menyimpan informasi tentang anggota UKM
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id('anggota_id');
            $table->string('nama_anggota', 100);
            $table->string('nim_anggota', 20)->unique();
            $table->string('prodi_anggota', 100);
            $table->string('jabatan_anggota', 20);
            $table->unsignedBigInteger('ukm_id');
            $table->timestamps();

            // Foreign key ke tabel t_ukm
            $table->foreign('ukm_id')->references('ukm_id')->on('t_ukm')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
