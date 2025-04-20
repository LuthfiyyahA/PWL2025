@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($ukm)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $ukm->ukm_id }}</td>
                    </tr>
                    <tr>
                        <th>Nama UKM</th>
                        <td>{{ $ukm->nama }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $ukm->deskripsi }}</td>
                    </tr>
                    <tr>
                        <th>Ketua Umum</th>
                        <td>{{ $ukm->ketua_umum }}</td>
                    </tr>
                    <tr>
                        <th>Tahun Berdiri</th>
                        <td>{{ $ukm->tahun_berdiri }}</td>
                    </tr>
                </table>
            @endempty
            <a href="{{ url('ukm') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush