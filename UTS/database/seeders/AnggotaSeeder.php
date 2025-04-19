<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk tabel anggota
        // Tabel ini menyimpan informasi tentang anggota UKM
        $data = [
            [
                'nama_anggota' => 'Budi Santoso',
                'nim_anggota' => '1234567890',
                'prodi_anggota' => 'Teknik Informatika',
                'jabatan_anggota' => 'Anggota',
                'ukm_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Dewi Lestari',
                'nim_anggota' => '0987654321',
                'prodi_anggota' => 'Sistem Informasi',
                'jabatan_anggota' => 'Sekertaris',
                'ukm_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Cahyo Prabowo',
                'nim_anggota' => '1122334455',
                'prodi_anggota' => 'Teknik Elektro',
                'jabatan_anggota' => 'Ketua',
                'ukm_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Siti Aminah',
                'nim_anggota' => '2233445566',
                'prodi_anggota' => 'Desain Komunikasi Visual',
                'jabatan_anggota' => 'Sekretaris',
                'ukm_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Rudi Hartono',
                'nim_anggota' => '3344556677',
                'prodi_anggota' => 'Manajemen',
                'jabatan_anggota' => 'Bendahara',
                'ukm_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Lina Marlina',
                'nim_anggota' => '4455667788',
                'prodi_anggota' => 'Ilmu Komunikasi',
                'jabatan_anggota' => 'Anggota',
                'ukm_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Andi Wijaya',
                'nim_anggota' => '5566778899',
                'prodi_anggota' => 'Teknik Sipil',
                'jabatan_anggota' => 'Ketua',
                'ukm_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Rina Sari',
                'nim_anggota' => '6677889900',
                'prodi_anggota' => 'Akuntansi',
                'jabatan_anggota' => 'Anggota',
                'ukm_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Eko Prasetyo',
                'nim_anggota' => '7788990011',
                'prodi_anggota' => 'Teknik Mesin',
                'jabatan_anggota' => 'Anggota',
                'ukm_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_anggota' => 'Sari Indah',
                'nim_anggota' => '8899001122',
                'prodi_anggota' => 'Psikologi',
                'jabatan_anggota' => 'Ketua',
                'ukm_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data ke tabel anggota
        DB::table('anggota')->insert($data);
    }
}
