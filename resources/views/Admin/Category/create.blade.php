@extends('Admin.layouts.main')
@section('title')
    Service Create
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4">Create Service </h3>
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
                        <form method="post" action="{!! route('admin.categorys.store') !!}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="text" required class="form-control" value=" " name="name">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Image</label>
                                        </div>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Image Alternate</label>
                                        </div>
                                        <input type="text" class="form-control" name="image_alt">
                                    </div>
                                </div>
                                <div class="col-8 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Category</label>
                                        </div>
                                        <select required class="form-control" name="main_cat" style="height: 40px">
                                            <option>Select Option</option>
                                                <option value="BPO">BPO</option>
                                                <option value="Business Advisory">Business Advisory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Icon</label>
                                        </div>
                                        <input type="file" class="form-control" value=" " name="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Tag</label>
                                        </div>
                                        <input type="text" class="form-control" value=" " name="meta_tag">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Title</label>
                                        </div>
                                        <input type="text" class="form-control" name="meta_title">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Description</label>
                                        </div>
                                        <textarea name="meta_description" id="meta_description"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Small Description</label>
                                        </div>
                                        <textarea required name="s_description" id="s_description"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Description</label>
                                        </div>
                                        <textarea required name="description" id="description"
                                                  class="form-control ckeditor"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{!! route('admin.categorys.index') !!}"
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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{!! asset('/templateEditor/ckeditor/ckeditor.js') !!}"></script>
    <script>
        CKEDITOR.replace('description');
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

