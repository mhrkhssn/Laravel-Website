@extends('Admin.layouts.main')
@section('title')
    Team Member Edit
@stop
@section('content')
    <div class="container w-100 ">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4">Edit Team Member</h3>
                        <div class="row">
                            <div class="col-12">
                                <img src="{!! asset($news->image) !!}" style="width: 100px" class="float-right"/>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{!! route('admin.news.update',$news->id) !!}"
                              enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{!! $news->name !!}" name="name">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Image Alternate</label>
                                        </div>
                                        <input type="text" class="form-control" value="{!! $news->image_alt !!}" name="image_alt">
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Designation</label>
                                            <input type="text" name="designation" value="{!! $news->designation !!}" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Facebook Link</label>
                                        </div>
                                        <input type="text"
                                               class="form-control" value="{!! $news->f_link !!}" name="f_link">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Twitter Link</label>
                                        </div>
                                        <input type="text"
                                               class="form-control" value="{!! $news->t_link !!}"
                                               name="t_link">
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>LinkedIn Link</label>
                                        </div>
                                        <input type="text"
                                               class="form-control" value="{!! $news->l_link !!}"
                                               name="l_link">
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Instagram Link</label>
                                        </div>
                                        <input type="text"
                                               class="form-control" value="{!! $news->i_link !!}"
                                               name="i_link">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 text-right">
                                <div class="form-group col-12 text-right">
                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                    <a href="{!! route('admin.posts.index') !!}"
                                       class=" btn btn-sm btn-danger">Cancel </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')

@endsection
@section('js')

@endsection
