@extends('layouts.template')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Level</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover" id="table_level">
        <thead>
          <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      $('#table_level').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('level.index') }}",
        columns: [
          { data: 'level_id', name: 'level_id' },
          { data: 'level_kode', name: 'level_kode' },
          { data: 'level_nama', name: 'level_nama' },
          { data: 'aksi', name: 'aksi', orderable: false, searchable: false }
        ]
      });
    });
  </script>
@endpush