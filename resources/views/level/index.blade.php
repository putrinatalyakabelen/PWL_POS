@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create') }}">Tambah</a>
                <button onclick="modalAction('{{ url('/level/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Level</th>
                        <th>Nama Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
        data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection
@push('css')
@endpush
@push('js')
<script>
    function modalAction(url = '') {
        $('#myModal').load(url, function () {
            $('#myModal').modal('show');
        });
    }

    var dataLevel;
    $(document).ready(function () {
            dataLevel = $('#table_level').DataTable({
                serverSide: true,  
                ajax: {
                    url: "{{ url('level/list') }}",
                    type: "POST",
                    dataType: "json",
                },
                columns: [
                    { 
                        data: "DT_RowIndex", className: "text-center", orderable: false, searchable: false 
                    }, { 
                        data: "level_kode", className: "",
                    }, { 
                        data: "level_nama", className: "",
                    }, { 
                        data: "aksi", 
                        className: "", orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endpush