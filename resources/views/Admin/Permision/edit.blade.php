@extends('Admin.layouts.main')
@section('title')
    permission   Edit
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Edit </h3>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form method="post" action="{!! route('admin.permissions.update',$Permision->id) !!}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <div class="input-label">
                                    <label>Name</label>
                                </div>
                                <input type="text" required class="form-control" value="{!! $Permision->name !!}"
                                       name="name">
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Main</label>
                                    </div>
                                    <input type="checkbox" @if($Permision->main==1)  checked @endif class=" " value="main" name="main">
                                </div>
                            </div>
                            <div class="row mt-4">
                            <div class="col-12">
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                <a href="{!! route('admin.permissions.index') !!}"
                                   class=" btn btn-sm btn-danger">Cancel </a>
                            </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('short_detail');
        CKEDITOR.replace('detail');
    </script>
@endsection
