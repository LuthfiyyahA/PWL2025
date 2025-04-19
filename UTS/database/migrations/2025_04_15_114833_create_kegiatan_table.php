<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // membuat tabel kegiatan
    // Tabel ini menyimpan informasi tentang kegiatan yang dilakukan oleh UKM
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('kegiatan_id');
            $table->string('nama_kegiatan', 100);
            $table->date('tanggal_kegiatan');
            $table->text('deskripsi_kegiatan')->nullable();
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
        Schema::dropIfExists('kegiatan');
    }
};
