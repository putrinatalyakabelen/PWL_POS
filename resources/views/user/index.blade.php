@extends('layouts.template')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="row mb-3">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Filter:</label>
                <div class="col-3">
                    <select class="form-control" id="level_id" name="level_id" required>
                        <option value="">Semua</option>
                        @foreach ($level as $item)
                            <option value="{{ $item->level_id }}">{{ $item->level_nama }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Level Pengguna</small>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Level Pengguna</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
@endsection

@push('css')
<!-- Tambahkan CSS tambahan jika perlu -->
@endpush

@push('js')
<script>
    $(document).ready(function () {
        var dataUser = $('#table_user').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('user/list') }}",
                type: "POST",
                data: function (d) {
                    d.level_id = $('#level_id').val();
                    d._token = '{{ csrf_token() }}'; // jika pakai POST
                }
            },
            columns: [
                {
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "username",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "nama",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "level.level_nama",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "aksi",
                    orderable: false,
                    searchable: false
                }
            ]
        });

        $('#level_id').on('change', function () {
            dataUser.ajax.reload();
        });
    });
</script>
@endpush