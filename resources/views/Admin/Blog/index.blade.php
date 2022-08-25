@extends('Admin.layouts.main')

@section('title')
    Blogs
@stop

@section('content')
    <div class="container-fluid">
        <div class="row w-100  mt-4 ">
            <h3 class="text-22 text-center text-bold w-100 mb-4"> Blogs </h3>
        </div>
        <div class="row    mt-4 mb-4 ">
            @if (Gate::allows('blog_create'))
                <div class="col-12 text-right">
                    <a href="{!! route('admin.blogs.create') !!}" class="btn btn-primary btn-sm ">Create Blog</a>
                </div>
            @endif
        </div>
        <div class="row w-100 text-center">
            <div class="col-12">
                <table class="table table-striped   table-hover" id="data-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Meta Tag</th>
                        <th>Meta Title</th>
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
                    "url": "{{ route('admin.blogs.getdata') }}",
                    "type": "POST",
                    "data": {_token: "{{csrf_token()}}"}
                },
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'meta_tag', name: 'meta_tag'},
                    {data: 'meta_title', name: 'meta_title'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection