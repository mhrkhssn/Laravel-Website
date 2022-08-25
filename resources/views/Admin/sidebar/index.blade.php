@extends('Admin.layouts.main')

@section('title')
    Side  Bar  Menu
@stop

@section('content')
    <div class="container-fluid">
        <div class="row w-100  mt-4 ">
            <h3 class="text-22 text-center text-bold w-100 mb-4"> SideBar Menus </h3>
        </div>
        <div class="row    mt-4 mb-4 ">
            <div class="col-12 text-right">
                <a href="{!! route('admin.sidebar.create') !!}" class="btn btn-primary btn-sm ">Create Menu </a>
            </div>
        </div>
        <div class="row w-100 text-center">
            <div class="col-12">
                <table class="table table-striped   table-hover" id="data-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Main</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Url</th>
                        <th width="200px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#data-table').DataTable({
                "processing": true,
                "serverSide": true,
                ajax: {
                    "url": "{{ route('admin.sidebar.getdata') }}",
                    "type": "POST",
                    "data": {_token: "{{csrf_token()}}"}
                },
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'main', name: 'main'},
                    {data: 'icon', name: 'icon'},
                    {data: 'route_name', name: 'route_name'},
                    {data: 'url', name: 'url'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection
