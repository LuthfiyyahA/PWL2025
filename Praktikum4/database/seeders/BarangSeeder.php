<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 300000,
                'harga_jual' => 450000,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 3,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Celana',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 4,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Pensil',
                'harga_beli' => 2000,
                'harga_jual' => 5000,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 4,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Buku Tulis',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
                'created_at' => now(),
                'updated_at' => null,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
