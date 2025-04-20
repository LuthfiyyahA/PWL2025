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
                <a href="{{ url('ukm') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form action="{{ url('ukm/' . $ukm->ukm_id) }}" method="POST" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Nama UKM</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="nama" name="nama"value="{{ old('nama', $ukm->nama) }}" required>
                            @error('nama')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Deskripsi UKM</label>
                        <div class="col-11">
                            <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $ukm->deskripsi }}</textarea>
                            @error('deskripsi')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Ketua Umum</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="ketua_umum" name="ketua_umum"value="{{ old('ketua_umum', $ukm->ketua_umum) }}" required>
                            @error('ketua_umum')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Tahun Berdiri</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri"value="{{ old('tahun_berdiri', $ukm->tahun_berdiri) }}" required>
                            @error('tahun_berdiri')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('ukm') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endempty
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush