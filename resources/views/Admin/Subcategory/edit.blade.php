@extends('Admin.layouts.main')
@section('title')
    Project  Edit
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
                        <form method="post" action="{!! route('admin.sub_categorys.update',$Subcategory->id) !!}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{!! $Subcategory->name !!}" name="name">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Category</label>
                                        </div>
                                        <select required class="form-control" id="cat_id" name="cat_id" style="height: 40px">
                                            <option value="">Select Option</option>
                                            @foreach($maincategory as $item)
                                                <option value="{!! $item->id !!}"
                                                        @if($item->id==$Subcategory->cat_id) selected @endif >{!! $item->name !!}</option>
                                            @endforeach
                                        </select>
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
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Image Alternate</label>
                                        </div>
                                        <input type="text" class="form-control" name="image_alt" value="{!! $Subcategory->image_alt !!}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Icon</label>
                                        </div>
                                        <input type="file" class="form-control" value="" name="icon">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Client Name</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{!! $Subcategory->c_name !!}" name="c_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    Old<img src="{!! asset($Subcategory->image) !!}" style="width: 100px" class="float-right"/>
                                </div>
                                <div class="col-4">
                                    Old<img src="{!! asset($Subcategory->icon) !!}" style="width: 100px" class="float-right"/>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Date</label>
                                        </div>
                                        <input type="date" required class="form-control" value="{!! $Subcategory->date !!}" name="date">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Website</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{!! $Subcategory->website !!}" name="website">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Location</label>
                                        </div>
                                        <input type="text" required class="form-control" value="{!! $Subcategory->location !!}" name="location">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Tag</label>
                                        </div>
                                        <input type="text" class="form-control" value="{!! $Subcategory->meta_tag !!}" name="meta_tag">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Title</label>
                                        </div>
                                        <input type="text" class="form-control" value="{!! $Subcategory->meta_title !!}" name="meta_title">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Description</label>
                                        </div>
                                        <textarea name="meta_description" id="meta_description"
                                                  class="form-control">{!! $Subcategory->meta_description !!}</textarea>
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
                                                  class="form-control">{!! $Subcategory->s_description !!}</textarea>
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
                                                  class="form-control">{!! $Subcategory->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{!! route('admin.sub_categorys.index') !!}"
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
    <<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{!! asset('/templateEditor/ckeditor/ckeditor.js') !!}"></script>
    <script>
        CKEDITOR.replace('description');
        $(document).ready(function () {
        });
    </script>
@endsection
