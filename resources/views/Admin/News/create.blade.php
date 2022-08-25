@extends('Admin.layouts.main')
@section('title')
    Team Member Create
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form"><div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4">Create Team Member </h3>
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
                        <form method="post" action="{!! route('admin.news.store') !!}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="text" required class="form-control" value="" name="name">
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
                                        <input type="text" required class="form-control" value="" name="image_alt">
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Designation</label>
                                            <input required type="text" name="designation" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Facebook Link</label>
                                        </div>
                                        <input required type="text"
                                               class="form-control" value=" " name="f_link">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Twitter Link</label>
                                        </div>
                                        <input required type="text"
                                               class="form-control" value=" "
                                               name="t_link">
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>LinkedIn Link</label>
                                        </div>
                                        <input required type="text"
                                               class="form-control" value=" "
                                               name="l_link">
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Instagram Link</label>
                                        </div>
                                        <input required type="text"
                                               class="form-control" value=" "
                                               name="i_link">
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
{{--    <div class="spinner-border d-none" id="#loader" role="status">--}}
{{--        <span class="sr-only">Loading...</span>--}}
{{--    </div>--}}
@stop
@section('css')
{{--    <link rel="stylesheet" href="{!! asset('dist/tags/assets/bootstrap-tagsinput.css') !!}" type="text/css">--}}
{{--    <link rel="stylesheet" href="{!! asset('dist/tags/assets/app.css') !!}" type="text/css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet"--}}
{{--          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css">--}}
{{--    <link rel="stylesheet"--}}
{{--          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"--}}
{{--          integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="--}}
{{--          crossorigin="anonymous"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('dist/admin/assets/plugins/dropify/css/dropify.min.css') }}">--}}

@endsection

@section('js')
{{--    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>--}}
{{--    <script src="{{ asset('dist/tags/assets/bootstrap-tagsinput.min.js') }} "></script>--}}
{{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>--}}
{{--    <script>--}}
{{--        CKEDITOR.replace('text');--}}
{{--        $('#cat_id').on('change', function () {--}}
{{--            var cat = this.value--}}

{{--            $.ajax({--}}
{{--                method: 'POST',--}}
{{--                url: "{{ route('admin.sub_categorys.subcategory') }}",--}}
{{--                data: {--}}
{{--                    "_token": "{{ csrf_token() }}",--}}
{{--                    "cat": cat--}}
{{--                },--}}
{{--                beforeSend: function () {--}}
{{--                    $('#loader').show();--}}
{{--                },--}}
{{--                complete: function () {--}}
{{--                    $('#loader').hide();--}}
{{--                },--}}
{{--                success: function (response) {--}}
{{--                    $('#sub_cat_id').html(response);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}


{{--    </script>--}}
@endsection
