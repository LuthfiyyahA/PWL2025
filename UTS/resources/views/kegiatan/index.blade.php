@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('kegiatan/create') }}">Tambah Kegiatan</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-2 col-form-label">Filter:</label>
                <div class="col-4">
                    <select class="form-control" id="ukm_id" name="ukm_id">
                        <option value="">-- Semua --</option>
                        @foreach ($ukm as $item)
                            <option value="{{ $item->ukm_id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Filter berdasarkan Nama UKM</small>
                </div>
            </div>
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
@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataUser = $('#table_kegiatan_ukm').DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    "url": "{{ url('kegiatan/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d){
                        d._token = "{{ csrf_token() }}";
                        d.ukm_id = $("#ukm_id").val();
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },{
                        data: "nama_kegiatan",
                        className: "",
                        orderable: false,
                        searchable: false
                    },{
                        data: "ukm.nama",
                        className: "",
                        orderable: true,
                        searchable: true
                    },{
                        data: "aksi",
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $("#ukm_id").on("change", function() {
                dataUser.ajax.reload();
            });
        });
    </script>
@endpush