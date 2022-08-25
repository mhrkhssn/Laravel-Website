@extends('Admin.layouts.main')
@section('title')
    Product View
@stop
@section('content')
    <div class="container" onload="zoom()">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> View </h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Title</label>
                                    </div>
                                    <input type="text" readonly class="form-control"
                                           value="{!! $post->title !!}" name="title">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label> Blogs</label>
                                    </div>
                                    <select name="blog_id"readonly class="form-control" style="height: 40px"
                                            id="blog_id">
                                        <option value=""> Select Option</option>
                                        @foreach($data  as $item)
                                            <option @if($item->id == $post->blog_id) selected @endif
                                            value="{!! $item->id !!}"> {!! $item->name !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <img src="{!! asset($post->image) !!}" style="width: 100px" class="float-right mt-5"/>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Description</label>
                                    </div>
                                    <textarea name="post" class="form-control"readonly rows="10" cols="120"
                                              id="text">{!! strip_tags($post->post) !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Meta Title</label>
                                    </div>
                                    <input type="text"  class="form-control"readonly value="{!! $post->meta !!}"
                                           name="meta">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Meta Tag</label>
                                    </div>
                                    <input type="text"  class="form-control"readonly value="{!! $post->meta_tag !!}"
                                           name="meta_tag">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Meta Description</label>
                                    </div>
                                    <textarea rows="3"readonly name="meta_description" class="form-control"
                                              id="meta_description">{!! $post->meta_description !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Tags</label>
                                    </div>
                                    <input type="text" value="{!! $post->tags !!}" name="tags"
                                           data-role="tagsinput"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 text-right">
                            <div class="form-group col-12 text-right">
                                <a href="{!! route('admin.posts.index') !!}"
                                   class=" btn btn-sm btn-danger">Cancel </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="{!! asset('dist/tags/assets/bootstrap-tagsinput.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('dist/tags/assets/app.css') !!}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
          integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
          crossorigin="anonymous"/>
@endsection
@section('js')
    <script>
        function zoom() {
            document.body.style.zoom = "90%"
        }
    </script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="{{ asset('dist/tags/assets/bootstrap-tagsinput.min.js') }} "></script>
    <script>

    </script>
@endsection
