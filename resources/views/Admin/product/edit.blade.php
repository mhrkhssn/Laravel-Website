@extends('Admin.layouts.main')
@section('title')
    Product Edit
@stop


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4"> Edit </h3>
                        <form method="post" action="{!! route('admin.products.update',$Product->id) !!}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <div class="input-label">
                                    <label>Name</label>
                                </div>
                                <input type="text" required class="form-control" value="{!! $Product->name !!}"
                                       name="name">
                            </div>
                            <div class="form-group">
                                <div class="input-label">
                                    <label>Price</label>
                                </div>
                                <input required type="number" class="form-control" value="{!! $Product->price !!}"
                                       name="price">
                            </div>
                            <div class="form-group">
                                <div class="input-label">
                                    <label>Image</label>
                                </div>
                                <input   type="file" class="form-control" value="" name="image">
                            </div>
                            <div class="form-group">
                                <div class="input-label">
                                    <label>Short Detail </label>
                                </div>
                                <textarea name="short_detail"
                                          id="short_detail">{!! $Product->short_detail !!}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-label">
                                    <label> Detail </label>
                                </div>
                                <textarea name="detail" id="detail">{!! $Product->detail !!}</textarea>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                <a href="{!! route('admin.products.index') !!}"
                                   class=" btn btn-sm btn-danger">Cancel </a>
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

