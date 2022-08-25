@extends('Admin.layouts.main')
@section('title')
    Page Edit
@stop
@section('content')
    <div class="container w-100 ">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4">Edit Page </h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{!! route('admin.pages.update',$page->id) !!}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input   type="text" required class="form-control" value="{!! $page->name !!}" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label> Image</label>
                                            <input  type="file" name="image" class="form-control dropify"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Text</label>
                                        </div>
                                        <textarea required name="text" id="text">{!! $page->text !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Title</label>
                                        </div>
                                        <input required type="text" required class="form-control" value="{!! $page->meta_title !!}" name="meta_title">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Description</label>
                                        </div>
                                        <input required type="text" required class="form-control" value="{!! $page->meta_description !!}"
                                               name="meta_description">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5 text-right">
                                <div class="form-group col-12 text-right">
                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                    <a href="{!! route('admin.news.index') !!}"
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
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="{{ asset('dist/tags/assets/bootstrap-tagsinput.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>
    <script>
        CKEDITOR.replace('text');
        $('#cat_id').on('change', function () {
            var cat = this.value

            $.ajax({
                method: 'POST',
                url: "{{ route('admin.sub_categorys.subcategory') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "cat": cat
                },
                beforeSend: function () {
                    $('#loader').show();
                },
                complete: function () {
                    $('#loader').hide();
                },
                success: function (response) {
                    $('#sub_cat_id').html(response);
                }
            });
        });


    </script>
@endsection
