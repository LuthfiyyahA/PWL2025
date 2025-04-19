<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // Seeder untuk tabel t_ukm
    // Tabel ini menyimpan informasi tentang Unit Kegiatan Mahasiswa (UKM)
    public function run(): void
    {
        $data = [
            [
                'nama_ukm' => 'UKM Olahraga',
                'deskripsi_ukm' => 'Unit Kegiatan Mahasiswa yang fokus pada kegiatan olahraga.',
                'ketua_ukm' => 'John Doe',
                'tahun_berdiri' => '2010',
            ],
            [
                'nama_ukm' => 'UKM Seni',
                'deskripsi_ukm' => 'Unit Kegiatan Mahasiswa yang fokus pada seni dan budaya.',
                'ketua_ukm' => 'Jane Smith',
                'tahun_berdiri' => '2012',
            ],
            [
                'nama_ukm' => 'UKM Teknologi',
                'deskripsi_ukm' => 'Unit Kegiatan Mahasiswa yang fokus pada teknologi dan inovasi.',
                'ketua_ukm' => 'Alice Johnson',
                'tahun_berdiri' => '2015',
            ],
        ];

        // Insert data ke tabel t_ukm
        DB::table('t_ukm')->insert($data);
    }
}
