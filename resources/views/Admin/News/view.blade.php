@extends('Admin.layouts.main')
@section('title')
    View Team Member
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4">View Team Member </h3>

                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Name</label>
                                    </div>
                                    <input type="text" required class="form-control" value="{!! $news->name !!}" name="name">
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-3">
                                        <label>Image</label>
                                        <img src="{!! asset($news->image) !!}" class="float-right">
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Designation</label>
                                        <input required type="text" name="designation" value="{!! $news->designation !!}" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Facebook Link</label>
                                    </div>
                                    <input required type="text"
                                           class="form-control" value="{!! $news->f_link !!}" name="f_link">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Twitter Link</label>
                                    </div>
                                    <input required type="text"
                                           class="form-control" value="{!! $news->t_link !!}"
                                           name="t_link">
                                </div>
                            </div>
                            <div class="col-4 mt-4">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>LinkedIn Link</label>
                                    </div>
                                    <input required type="text"
                                           class="form-control" value="{!! $news->l_link !!}"
                                           name="l_link">
                                </div>
                            </div>
                            <div class="col-4 mt-4">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Instagram Link</label>
                                    </div>
                                    <input required type="text"
                                           class="form-control" value="{!! $news->i_link !!}"
                                           name="i_link">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="form-group text-right">
                                    <a href="{!! route('admin.news.index') !!}"
                                       class=" btn btn-sm btn-danger">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
