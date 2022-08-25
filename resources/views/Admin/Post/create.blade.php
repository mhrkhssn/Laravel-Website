@extends('Admin.layouts.main')
@section('title')
    Post Create
@stop
@section('content')
    <div class="container w-100 ">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4">Create Post </h3>
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
                        <form method="post" action="{!! route('admin.posts.store') !!}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Title</label>
                                        </div>
                                        <input required type="text" class="form-control" value=" " name="title">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label> Blogs</label>
                                        </div>
                                        <select name="blog_id" class="form-control" style="height: 40px" required id="blog_id">
                                            <option value=""> Select Option</option>
                                            @foreach($data  as $item)
                                                <option value="{!! $item->id !!}"> {!! $item->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Image Alternate</label>
                                        </div>
                                        <input type="text" class="form-control" value=" " name="image_alt">
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label> Image</label>
                                            <input id="dropify" type="file" name="image" class="form-control dropify"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Description</label>
                                        </div>
                                        <textarea name="post" id="text"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Title</label>
                                        </div>
                                        <input type="text" class="form-control" value=" " name="meta">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Tag</label>
                                        </div>
                                        <input type="text" class="form-control" value=" " name="meta_tag">
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Description</label>
                                        </div>
                                        <textarea rows="3" name="meta_description" class="form-control"
                                                  id="meta_description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Tags</label>
                                        </div>
                                        <input type="text" value="" name="tags"
                                               data-role="tagsinput"/>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{!! date('Y-m-d h:i:s', time()) !!}" name="publish_time"/>
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
    <div class="spinner-border d-none" id="#loader" role="status">
        <span class="sr-only">Loading...</span>
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
    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">
@endsection
@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{!! asset('/templateEditor/ckeditor/ckeditor.js') !!}"></script>
    <script src="{{ asset('dist/tags/assets/bootstrap-tagsinput.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>
    <script>
        CKEDITOR.replace('text');
        $('#blog_id').on('change', function () {
            var blog = this.value
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.posts.post') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "blog": blog
                },
                beforeSend: function () {
                    $('#loader').show();
                },
                complete: function () {
                    $('#loader').hide();
                },
                success: function (response) {
                    $('#post_id').html(response);
                }
            });
        });
    </script>
@endsection
