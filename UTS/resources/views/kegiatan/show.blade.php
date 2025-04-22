@extends('layouts.template') <!-- Meng-extend template utama -->

@section('content') <!-- Konten utama halaman -->

    <!-- Kartu tampilan utama -->
    <div class="card card-outline card-primary">
        <div class="card-header">
            <!-- Judul halaman -->
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div> <!-- Tombol untuk menambah kegiatan UKM -->
        </div>

        <div class="card-body">
            <!-- Mengecek apakah data UKM kosong -->
            @empty($kegiatan_ukm)
                <!-- Menampilkan pesan kesalahan jika data tidak ditemukan -->
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <!-- Menampilkan data detail UKM dalam bentuk tabel -->
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $kegiatan_ukm->kegiatan_id }}</td>
                    </tr>
                    <tr>
                        <th>Nama UKM</th>
                        <td>{{ $kegiatan_ukm->ukm->nama }}</td>
                    </tr>
                    <tr>
                        <th>Nama kegiatan</th>
                        <td>{{ $kegiatan_ukm->nama_kegiatan }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi Kegiatan</th>
                        <td>{{ $kegiatan_ukm->deskripsi_kegiatan }}</td>
                    </tr>
                </table>
            @endempty

            <!-- Tombol untuk kembali ke halaman sebelumnya -->
            <a href="{{ url('kegiatan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection <!-- Akhir konten utama halaman -->

@push('css') <!-- Section untuk menambahkan CSS tambahan jika diperlukan -->
@endpush

@push('js') <!-- Section untuk menambahkan JavaScript tambahan jika diperlukan -->
@endpush