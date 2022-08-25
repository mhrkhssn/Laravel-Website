@extends('Admin.layouts.main')
@section('title')
    Menu  Create
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Create Menu </h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <span>&nbsp;{{ $error }}&nbsp;</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form method="post" action="{!! route('admin.sidebar.store') !!}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Title</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{{old('title')}}" name="title">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Main</label>
                                        </div>
                                        <input type="checkbox" id="main_check" value="main" name="main">
                                    </div>
                                </div>
                                <div class="col-6" id="parrent">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Main Menu</label>
                                        </div>
                                        <select required id="parrent_val" name="parrent" class="form-control">
                                            <option value="">Select Option</option>
                                            @foreach($mainSidebarServices as $item)
                                                <option value="{!! $item->id !!}">{!! $item->title !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Icon</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{{old('icon')}}" name="icon">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="route_name" required class="form-control" value="{{old('route_name')}}" name="route_name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Url</label>
                                        </div>
                                        <input type="url" required class="form-control" value="{{old('url')}}" name="url">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right mt-3">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                <a href="{!! route('admin.sidebar.index') !!}"
                                   class=" btn btn-sm btn-danger">Cancel </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('#main_check').change(function () {
                if ($(this).is(":checked")) {
                    $("#parrent").addClass("d-none");
                    $("#parrent_val").prop('required', false);
                } else {
                    $("#parrent").removeClass("d-none");
                    $("#parrent_val").prop('required', true);
                }
            });
        });
    </script>
@endsection
