@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($kegiatan_ukm)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            @else
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
            <a href="{{ url('kegiatan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush