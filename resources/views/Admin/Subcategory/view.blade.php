@extends('Admin.layouts.main')
@section('title')
    View Project
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4">View Project </h3>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="text" readonly class="form-control" value="{!! $Subcategory->name !!}" name="name">
                                    </div>
                                </div>
                                @php
                                    $relation = App\Models\Sub_Category::with('cat_name')->where('id',$Subcategory->id)->first();
                                @endphp
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Service</label>
                                        </div>
                                        <input type="text" readonly class="form-control" value="{!! $Subcategory->cat_name->name !!}" name="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Icon</label>
                                        </div>
                                        <input type="icon" readonly class="form-control" value="{!! $Subcategory->icon !!}" name="icon">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Tag</label>
                                        </div>
                                        <input type="text" readonly class="form-control" value="{!! $Subcategory->meta_tag !!}" name="meta_tag">
                                    </div>
                                </div>
                                <div class="col-6 mt-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Title</label>
                                        </div>
                                        <input type="text" readonly class="form-control" value="{!! $Subcategory->meta_title !!}" name="meta_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="form-group text-right">
                                        <a href="{!! route('admin.sub_categorys.index') !!}"
                                           class=" btn btn-sm btn-danger">Back</a>
                                    </div>
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
