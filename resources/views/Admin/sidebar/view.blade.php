@extends('Admin.layouts.main')
@section('title')
    View   Menu
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4"> View Menu </h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Title</label>
                                        </div>
                                        <input type="text" disabled class="form-control" value="{{$Sidebar->title}}" name="title">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Icon</label>
                                        </div>
                                        <input type="text" disabled class="form-control" value="{{$Sidebar->icon}}" name="icon">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="route_name" disabled class="form-control" value="{{$Sidebar->route_name}}" name="route_name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Url</label>
                                        </div>
                                        <input type="url" disabled class="form-control" value="{{$Sidebar->url}}" name="url">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right mt-3">
                                <a href="{!! route('admin.sidebar.index') !!}"
                                   class=" btn btn-sm btn-danger">Cancel </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
{{--    <script>--}}
{{--        CKEDITOR.replace('description');--}}
{{--    </script>--}}
@endsection
