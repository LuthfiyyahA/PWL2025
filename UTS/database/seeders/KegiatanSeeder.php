<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk tabel kegiatan
        // Tabel ini menyimpan informasi tentang kegiatan yang dilakukan oleh UKM
        $data = [
            [
                'nama_kegiatan' => 'Turnamen Sepak Bola',
                'tanggal_kegiatan' => '2023-05-01',
                'deskripsi_kegiatan' => 'Turnamen sepak bola antar UKM.',
                'ukm_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Pameran Seni',
                'tanggal_kegiatan' => '2023-06-15',
                'deskripsi_kegiatan' => 'Pameran seni karya anggota UKM Seni.',
                'ukm_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kegiatan' => 'Workshop Teknologi',
                'tanggal_kegiatan' => '2023-07-20',
                'deskripsi_kegiatan' => 'Workshop tentang teknologi terbaru.',
                'ukm_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data ke tabel kegiatan
        DB::table('kegiatan')->insert($data);
    }
}
