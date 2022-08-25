@extends('Admin.layouts.main')
@section('title')
    Menu  Edit
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Edit Menu </h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <span>&nbsp;{{ $error }}&nbsp;</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form method="post" action="{!! route('admin.sidebar.update',$Sidebar->id) !!}"
                              enctype="multipart/form-data">
                            @csrf @method('put')
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Title</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{{$Sidebar->title}}" name="title">
                                    </div>
                                </div>
{{--                                @dd($Sidebar->main)--}}
                                <div class="col-1">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Main</label>
                                        </div>
                                        @if($Sidebar->main == 1)
                                            <input type="checkbox" id="main_check" value="main" name="main" checked disabled>
                                        @else
                                            <input type="checkbox" id="main_check" value="main" name="main" disabled>
                                        @endif
                                    </div>
                                </div>
                            @if($Sidebar->main == 1)
                                <div class="col-6" id="parrent" hidden>
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Main Menu</label>
                                        </div>
                                        <select id="parrent_val" name="parrent" class="form-control">
                                            @foreach($mainSidebarServices as $item)
                                                <option selected value="{!! $item->id !!}">{!! $item->title !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @else
                                <div class="col-6" id="parrent">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Main Menu</label>
                                        </div>
                                        <select disabled id="parrent_val" name="parrent" class="form-control">
                                            @foreach($mainSidebarServices as $item)
                                                <option selected value="{!! $item->id !!}">{!! $item->title !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Icon</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{{$Sidebar->icon}}" name="icon">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="route_name" required class="form-control" value="{{$Sidebar->route_name}}" name="route_name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Url</label>
                                        </div>
                                        <input type="url" required class="form-control" value="{{$Sidebar->url}}" name="url">
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
{{--    <script>--}}
{{--        CKEDITOR.replace('description');--}}
{{--    </script>--}}
@endsection
