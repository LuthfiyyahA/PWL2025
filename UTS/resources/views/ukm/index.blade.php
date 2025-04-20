@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('ukm/create') }}">Tambah UKM</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-2 col-form-label">Filter:</label>
                <div class="col-4">
                    <select class="form-control" id="nama" name="nama">
                        <option value="">-- Semua --</option>
                        @foreach ($ukm as $item)
                            <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Filter berdasarkan Nama UKM</small>
                </div>
            </div>
            <table class="table table-bordered table-striped table-hover table-sm" id="table_ukm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama UKM</th>
                        <th>Ketua Umum</th>
                        <th>Tahun Berdiri</th>
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
            var dataUser = $('#table_ukm').DataTable({
                serverSide: true,
                processing: true,
                ajax: {
                    "url": "{{ url('ukm/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d){
                        d._token = "{{ csrf_token() }}";
                        d.nama = $("#nama").val();
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },{
                        data: "nama",
                        className: "",
                        orderable: true,
                        searchable: true
                    },{
                        data: "ketua_umum",
                        className: "",
                        orderable: false,
                        searchable: false
                    },{
                        data: "tahun_berdiri",
                        className: "",
                        orderable: false,
                        searchable: false
                    },{
                        data: "aksi",
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $("#nama").on("change", function() {
                dataUser.ajax.reload();
            });
        });
    </script>
@endpush