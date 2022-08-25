@extends('Admin.layouts.main')

@section('title')
    Settings Edit
@stop

@section('content')
    <div class="container-fluid">
        <div class="row w-100  mt-4 ">
            <h3 class="text-22 text-center text-bold w-100 mb-4"> Settings Edit </h3>
        </div>
        <div class="row    mt-4 mb-4 ">
            <div class="col-12 text-right">
                <a href="{!! route('admin.settings.index') !!}" class="btn btn-primary btn-sm ">Back</a>
            </div>
        </div>
        <div class="row w-100  ">


            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  </div>
            <div class="col-12">
                <form method="post" action="{!! route('admin.settings.update',$setting->id) !!}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <div class="input-label">
                                    <label><b> Name*</b> </label>
                                </div>
                                <input required type="text" required class="form-control" value="{!! $setting->name !!}"
                                       name="name">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <div class="input-label">
                                    <label><b> Type* </b></label>
                                </div>
                                <input required type="text" required class="form-control "
                                       value="{!! $setting->type !!}" name="type">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <div class="input-label">
                                    <label><b> Image (optonal) </b> </label>
                                </div>
                                <input type="file" required class="form-control " value=" " name="image">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <div class="input-label">
                                    <label><b> Parrent (optonal) </b></label>
                                </div>
                                <select name="p_id" class="form-control">
                                    <option value="0" selected>Select option</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-label">
                                    <label><b> Text* (alt text others texts) </b></label>
                                </div>
                                <textarea required class="form-control"
                                          name="value">{!! $setting->value !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-label">
                                    <label><b> Description(optonal)</b></label>
                                </div>
                                <textarea required class="form-control"
                                          name="description">{!! $setting->description !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        <a href="{!! route('admin.settings.index') !!}"
                           class=" btn btn-sm btn-danger">Cancel </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">
@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
        CKEDITOR.replace('text');
    </script>
@endsection
