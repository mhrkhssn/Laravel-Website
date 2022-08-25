@extends('Admin.layouts.main')
@section('title')
    Product Create
@stop


@section('content')



    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4">Create Product </h3>
                        <form method="post" action="{!! route('admin.products.store') !!}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="text" required class="form-control" value=" " name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Price</label>
                                        </div>
                                        <input required type="number" class="form-control" value="" name="price">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Catagory</label>
                                        </div>
                                        <select class="form-control" name="cat_id" id="cat_id">
                                            <option>Select Option</option>
                                            @foreach($cat as $c)
                                                <option value="{!! $c->id !!}">{!! $c->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Sub Catagory</label>
                                        </div>
                                        <select class="form-control" name="subcat_id" id="sub_cat_id">
                                            <option>Select Option</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Image</label>
                                        </div>
                                        <input required type="file" class="form-control" value="" name="image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Title</label>
                                        </div>
                                        <input class="form-control" type="text" name="meta_title" id="meta_title"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Meta Description</label>
                                        </div>
                                        <textarea name="meta_description" class="form-control"
                                                  id="meta_description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Long Detail </label>
                                        </div>
                                        <textarea name="short_detail" id="short_detail"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label> Detail </label>
                                        </div>
                                        <textarea name="detail" id="detail"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-md-12">
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                <a href="{!! route('admin.products.index') !!}"
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
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('short_detail');
        CKEDITOR.replace('detail');
        CKEDITOR.replace('meta_description');
        $('#cat_id').on('change', function () {
            var cat = this.value
            $.ajax({
                method: 'POST',
                url: "{{ route('admin.sub_categorys.subcategory.product') }}",
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

