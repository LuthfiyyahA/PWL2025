@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form action="{{ url('ukm') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama UKM</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="nama" name="nama">
                        @error('nama')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Deskripsi UKM</label>
                    <div class="col-11">
                        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        @error('deskripsi')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Ketua Umum</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="ketua_umum" name="ketua_umum">
                        @error('ketua_umum')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Tahun Berdiri</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri">
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
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush