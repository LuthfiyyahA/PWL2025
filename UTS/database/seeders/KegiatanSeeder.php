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
        DB::table('kegiatan_ukm')->insert([
            [
                'ukm_id' => 1, // UKM Seni Tari
                'nama_kegiatan' => 'Pertunjukan Seni Tari Tradisional',
                'deskripsi_kegiatan' => 'Sebuah pertunjukan yang menampilkan tari-tarian tradisional dari berbagai daerah di Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 1, // UKM Seni Tari
                'nama_kegiatan' => 'Workshop Tari Modern',
                'deskripsi_kegiatan' => 'Workshop yang mengajarkan teknik tari modern kepada anggota dan mahasiswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 1, // UKM Seni Tari
                'nama_kegiatan' => 'Lomba Tari Antar UKM',
                'deskripsi_kegiatan' => 'Kompetisi tari antar UKM di kampus untuk menampilkan bakat tari terbaik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 2, // UKM Musik dan Paduan Suara
                'nama_kegiatan' => 'Konser Paduan Suara Kampus',
                'deskripsi_kegiatan' => 'Konser besar yang melibatkan anggota paduan suara kampus, menampilkan lagu-lagu klasik dan modern.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 2, // UKM Musik dan Paduan Suara
                'nama_kegiatan' => 'Festival Musik Kampus',
                'deskripsi_kegiatan' => 'Festival musik dengan berbagai penampilan alat musik dan vokal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 2, // UKM Musik dan Paduan Suara
                'nama_kegiatan' => 'Latihan Paduan Suara Rutin',
                'deskripsi_kegiatan' => 'Latihan rutin untuk mempersiapkan konser dan acara paduan suara kampus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 3, // UKM Olahraga
                'nama_kegiatan' => 'Turnamen Futsal Antar UKM',
                'deskripsi_kegiatan' => 'Kompetisi futsal antar UKM di kampus untuk mempererat hubungan antar anggota dan meningkatkan kebugaran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 3, // UKM Olahraga
                'nama_kegiatan' => 'Turnamen Basket Antar UKM',
                'deskripsi_kegiatan' => 'Kompetisi basket antar UKM untuk membangun kerjasama tim dan kebugaran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 3, // UKM Olahraga
                'nama_kegiatan' => 'Lomba Lari Kampus',
                'deskripsi_kegiatan' => 'Lomba lari antar mahasiswa untuk memperingati hari olahraga nasional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 3, // UKM Olahraga
                'nama_kegiatan' => 'Workshop Kebugaran Fisik',
                'deskripsi_kegiatan' => 'Workshop untuk meningkatkan pengetahuan tentang olahraga dan kebugaran fisik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 3, // UKM Olahraga
                'nama_kegiatan' => 'Senam Pagi Kampus',
                'deskripsi_kegiatan' => 'Kegiatan senam pagi untuk meningkatkan semangat dan kebugaran mahasiswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 4, // UKM Fotografi
                'nama_kegiatan' => 'Pameran Fotografi Kampus',
                'deskripsi_kegiatan' => 'Pameran yang menampilkan karya foto hasil jepretan anggota UKM Fotografi, termasuk kategori foto landscape, potret, dan dokumentasi kampus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 4, // UKM Fotografi
                'nama_kegiatan' => 'Workshop Fotografi',
                'deskripsi_kegiatan' => 'Workshop untuk memperdalam teknik fotografi bagi anggota dan mahasiswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 4, // UKM Fotografi
                'nama_kegiatan' => 'Lomba Foto Kampus',
                'deskripsi_kegiatan' => 'Lomba foto dengan tema kehidupan kampus, untuk meningkatkan kreativitas anggota.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 4, // UKM Fotografi
                'nama_kegiatan' => 'Pelatihan Editing Foto',
                'deskripsi_kegiatan' => 'Pelatihan pengeditan foto menggunakan software untuk menghasilkan karya foto yang lebih profesional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 4, // UKM Fotografi
                'nama_kegiatan' => 'Fotografi Alam',
                'deskripsi_kegiatan' => 'Kegiatan memotret keindahan alam sekitar kampus dan alam bebas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 5, // UKM Pecinta Alam
                'nama_kegiatan' => 'Pendakian Gunung Merapi',
                'deskripsi_kegiatan' => 'Pendakian ke Gunung Merapi bersama anggota UKM Pecinta Alam, diiringi dengan kegiatan edukasi tentang pelestarian alam.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 5, // UKM Pecinta Alam
                'nama_kegiatan' => 'Ekspedisi Alam Kalimantan',
                'deskripsi_kegiatan' => 'Ekspedisi alam untuk mengeksplorasi hutan Kalimantan dan konservasi satwa liar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 5, // UKM Pecinta Alam
                'nama_kegiatan' => 'Pelatihan Survival',
                'deskripsi_kegiatan' => 'Pelatihan bertahan hidup di alam terbuka, termasuk mempelajari teknik navigasi dan mencari sumber air.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 5, // UKM Pecinta Alam
                'nama_kegiatan' => 'Kampanye Penghijauan',
                'deskripsi_kegiatan' => 'Kegiatan penghijauan di sekitar kampus untuk mendukung pelestarian alam.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 5, // UKM Pecinta Alam
                'nama_kegiatan' => 'Pengamatan Satwa Liar',
                'deskripsi_kegiatan' => 'Kegiatan untuk mempelajari satwa liar yang ada di sekitar alam kampus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 5, // UKM Pecinta Alam
                'nama_kegiatan' => 'Cleaning Day Pantai',
                'deskripsi_kegiatan' => 'Kegiatan membersihkan pantai dari sampah plastik untuk menjaga kebersihan dan kelestarian lingkungan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 6, // UKM Bahasa Inggris
                'nama_kegiatan' => 'English Speaking Club',
                'deskripsi_kegiatan' => 'Kegiatan rutin untuk meningkatkan kemampuan berbicara dalam bahasa Inggris melalui diskusi dan presentasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 6, // UKM Bahasa Inggris
                'nama_kegiatan' => 'English Movie Night',
                'deskripsi_kegiatan' => 'Nonton film berbahasa Inggris bersama anggota UKM untuk memperkaya kosakata dan kemampuan mendengarkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 6, // UKM Bahasa Inggris
                'nama_kegiatan' => 'Public Speaking Workshop',
                'deskripsi_kegiatan' => 'Workshop yang mengajarkan teknik berbicara di depan umum dalam bahasa Inggris.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 7, // UKM Robotika
                'nama_kegiatan' => 'Workshop Dasar Robotika',
                'deskripsi_kegiatan' => 'Workshop untuk mengenalkan dasar-dasar robotika, pengenalan komponen, dan perakitan robot.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 7, // UKM Robotika
                'nama_kegiatan' => 'Lomba Robot Kampus',
                'deskripsi_kegiatan' => 'Kompetisi antar mahasiswa untuk merakit dan mengoperasikan robot dengan berbagai tantangan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 7, // UKM Robotika
                'nama_kegiatan' => 'Pelatihan Pemrograman Robot',
                'deskripsi_kegiatan' => 'Pelatihan pemrograman dasar untuk mengontrol robot menggunakan bahasa pemrograman tertentu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 8, // UKM Teater
                'nama_kegiatan' => 'Teater Kampus: Pementasan Drama',
                'deskripsi_kegiatan' => 'Pertunjukan teater yang melibatkan anggota UKM Teater, menampilkan drama dengan tema kehidupan kampus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 8, // UKM Teater
                'nama_kegiatan' => 'Workshop Seni Peran',
                'deskripsi_kegiatan' => 'Workshop untuk meningkatkan kemampuan akting dan seni peran bagi anggota UKM Teater.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 8, // UKM Teater
                'nama_kegiatan' => 'Lomba Monolog',
                'deskripsi_kegiatan' => 'Kompetisi monolog antar mahasiswa untuk menggali kemampuan berbicara dan seni peran individu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 9, // UKM Kewirausahaan
                'nama_kegiatan' => 'Seminar Kewirausahaan',
                'deskripsi_kegiatan' => 'Seminar dengan berbagai pembicara sukses dalam dunia kewirausahaan, memberikan wawasan dan inspirasi kepada mahasiswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 9, // UKM Kewirausahaan
                'nama_kegiatan' => 'Workshop Pengembangan Bisnis',
                'deskripsi_kegiatan' => 'Workshop untuk mengajarkan keterampilan praktis dalam memulai dan mengelola bisnis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 9, // UKM Kewirausahaan
                'nama_kegiatan' => 'Pitching Bisnis Mahasiswa',
                'deskripsi_kegiatan' => 'Kompetisi pitching bisnis untuk mahasiswa, mencari ide-ide bisnis terbaik untuk dikembangkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 10, // UKM Debat
                'nama_kegiatan' => 'Debat Antar UKM',
                'deskripsi_kegiatan' => 'Kompetisi debat antar UKM di kampus untuk mengasah kemampuan berargumen dan berpikir kritis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 10, // UKM Debat
                'nama_kegiatan' => 'Workshop Debat dan Argumentasi',
                'deskripsi_kegiatan' => 'Workshop untuk melatih teknik debat dan argumentasi yang efektif di berbagai topik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 10, // UKM Debat
                'nama_kegiatan' => 'Simulasi Debat',
                'deskripsi_kegiatan' => 'Simulasi debat di antara anggota UKM Debat untuk memperbaiki teknik dan strategi debat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 11, // UKM Jurnalistik
                'nama_kegiatan' => 'Pelatihan Penulisan Berita',
                'deskripsi_kegiatan' => 'Pelatihan untuk mengasah keterampilan dalam menulis berita dan artikel dengan gaya jurnalistik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 11, // UKM Jurnalistik
                'nama_kegiatan' => 'Lomba Menulis Artikel',
                'deskripsi_kegiatan' => 'Kompetisi menulis artikel bagi mahasiswa, dengan tema-topik tertentu yang berkaitan dengan kehidupan kampus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 11, // UKM Jurnalistik
                'nama_kegiatan' => 'Penerbitan Majalah Kampus',
                'deskripsi_kegiatan' => 'Proses penerbitan majalah kampus yang melibatkan anggota UKM dalam penulisan, editing, dan desain.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 11, // UKM Jurnalistik
                'nama_kegiatan' => 'Workshop Fotografi Jurnalistik',
                'deskripsi_kegiatan' => 'Workshop untuk mempelajari teknik fotografi dalam konteks jurnalistik dan pemberitaan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 11, // UKM Jurnalistik
                'nama_kegiatan' => 'Pelatihan Penyuntingan Berita',
                'deskripsi_kegiatan' => 'Pelatihan untuk memperdalam teknik penyuntingan berita agar lebih tajam dan informatif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 12, // UKM Film
                'nama_kegiatan' => 'Festival Film Kampus',
                'deskripsi_kegiatan' => 'Festival film yang menampilkan karya-karya film buatan mahasiswa, dengan kategori berbagai genre.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 12, // UKM Film
                'nama_kegiatan' => 'Workshop Cinematography',
                'deskripsi_kegiatan' => 'Workshop untuk meningkatkan keterampilan pembuatan film, mulai dari pengambilan gambar hingga editing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 12, // UKM Film
                'nama_kegiatan' => 'Lomba Film Pendek',
                'deskripsi_kegiatan' => 'Kompetisi pembuatan film pendek antar mahasiswa dengan tema sosial, budaya, atau pendidikan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 12, // UKM Film
                'nama_kegiatan' => 'Screening Film Kampus',
                'deskripsi_kegiatan' => 'Menayangkan film-film pendek karya mahasiswa UKM Film kepada publik kampus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 12, // UKM Film
                'nama_kegiatan' => 'Diskusi Film',
                'deskripsi_kegiatan' => 'Diskusi tentang film dan proses pembuatannya, dengan mengundang pembuat film dan ahli cinematography.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 13, // UKM Kuliner
                'nama_kegiatan' => 'Cooking Class Mahasiswa',
                'deskripsi_kegiatan' => 'Kelas memasak untuk mahasiswa yang ingin belajar berbagai resep masakan sederhana dan praktis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 13, // UKM Kuliner
                'nama_kegiatan' => 'Lomba Masak Antar UKM',
                'deskripsi_kegiatan' => 'Kompetisi memasak antar UKM yang menantang anggota untuk membuat masakan dengan bahan tertentu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 13, // UKM Kuliner
                'nama_kegiatan' => 'Festival Makanan Kampus',
                'deskripsi_kegiatan' => 'Festival makanan yang melibatkan berbagai UKM untuk memperkenalkan berbagai jenis masakan khas kampus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 13, // UKM Kuliner
                'nama_kegiatan' => 'Workshop Resep Sehat',
                'deskripsi_kegiatan' => 'Workshop memasak dengan fokus pada resep sehat dan bergizi untuk mahasiswa yang peduli dengan kesehatan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 13, // UKM Kuliner
                'nama_kegiatan' => 'Pameran Kuliner Kampus',
                'deskripsi_kegiatan' => 'Pameran kuliner yang menampilkan berbagai jenis masakan buatan mahasiswa dari UKM Kuliner.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ukm_id' => 13, // UKM Kuliner
                'nama_kegiatan' => 'Cooking Challenge Bersama',
                'deskripsi_kegiatan' => 'Tantangan memasak bersama antar anggota untuk melihat kemampuan memasak yang dimiliki, dengan tema masakan tertentu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
