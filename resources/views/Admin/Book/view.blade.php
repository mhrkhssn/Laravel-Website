@extends('Admin.layouts.main')
@section('title')
    View Email
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form">
                    <div class="card-body">
                        <h3 class="text-22 text-midnight text-bold mb-4">View Email </h3>

                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <div class="input-label">
                                        <label>Email</label>
                                    </div>
                                    <input type="text" readonly required class="form-control" value="{!! $book->email !!}"
                                           name="email">
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
