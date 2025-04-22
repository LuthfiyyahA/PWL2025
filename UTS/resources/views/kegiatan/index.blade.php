@extends('layouts.template') <!-- Meng-extend template utama -->

@section('content') <!-- Mulai section konten utama halaman -->

    <!-- Kartu tampilan utama -->
    <div class="card card-outline card-primary">
        <div class="card-header">
            <!-- Judul halaman -->
            <h3 class="card-title">{{ $page->title }}</h3>

            <!-- Tombol untuk menambah kegiatan UKM -->
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('kegiatan/create') }}">Tambah Kegiatan</a>
            </div>
        </div>

        <div class="card-body">
            <!-- Form filter nama UKM -->
            <div class="form-group row">
                <label class="col-2 col-form-label">Filter:</label>
                <div class="col-4">
                    <!-- Dropdown untuk filter nama UKM -->
                    <select class="form-control" id="ukm_id" name="ukm_id">
                        <option value="">-- Semua --</option>
                        @foreach ($ukm as $item)
                            <option value="{{ $item->ukm_id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Filter berdasarkan Nama UKM</small>
                </div>
            </div>

            <!-- Tabel untuk menampilkan data kegiatan UKM -->
            <table class="table table-bordered table-striped table-hover table-sm" id="table_kegiatan_ukm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama UKM</th>
                        <th>Nama Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection <!-- Akhir section konten utama halaman -->

@push('css') <!-- Section untuk menambahkan CSS tambahan jika diperlukan -->
@endpush

@push('js')<!-- Section untuk menambahkan JavaScript -->
    <!-- Plugin SweetAlert2 untuk notifikasi -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable untuk tabel kegiatan UKM
            var dataUser = $('#table_kegiatan_ukm').DataTable({
                serverSide: true, // Data diolah di server
                processing: true, // Menampilkan animasi loading saat memproses data
                ajax: {
                    "url": "{{ url('kegiatan/list') }}", // URL untuk mengambil data
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d){
                        d._token = "{{ csrf_token() }}"; // Token CSRF untuk keamanan
                        d.ukm_id = $("#ukm_id").val(); // Kirim data filter UKM
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex", // Index baris (otomatis)
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },{
                        data: "nama_kegiatan", // Kolom untuk nama kegiatan
                        className: "",
                        orderable: false,
                        searchable: false
                    },{
                        data: "ukm.nama", // Kolom untuk nama UKM
                        className: "",
                        orderable: true,
                        searchable: true
                    },{
                        data: "aksi", // Kolom untuk aksi (edit, hapus)
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Reload table saat filter UKM berubah
            $("#ukm_id").on("change", function() {
                dataUser.ajax.reload();
            });
        });
        
        // Jika ada session success, tampilkan notifikasi berhasil
        @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Data berhasil diperbarui!',
            text: '{{ session('success') }}',
            showConfirmButton: true
        });
        @endif
    </script>
@endpush