@extends('Admin.layouts.main')
@section('title')
    Role  Create
@stop


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card basic-form"><div class="card-header bg-light">
                        <h3 class="text-22 text-midnight text-bold mb-4">Create Role </h3>
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
                        <form method="post" action="{!! route('admin.roles.store') !!}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-label">
                                            <label>Name</label>
                                        </div>
                                        <input type="text" required class="form-control" value=" " name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                            <div class="row">
                                @foreach($permissions as $item)
                                    <div class="card mt-4 z-50" style="width: 18rem;">
                                        <div class="card-header">
                                            <h5 class="card-title">
                                              <span>{!! $item->name !!}</span>
                                            <span class="float-right mt-1"><input type="checkbox" value="{!! $item->id !!}"
                                                         name="permisions[]">   </span></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-text">
                                                <table class="table table-striped table-hover">
                                                    @if($item->child !=null)
                                                        @foreach($item->child as $item1 )
                                                            <tr>
                                                                <td > {!! $item1 ->name !!} </td>
                                                                <td> <span class="ml-4"> <input type="checkbox" value="{!! $item1->id !!}"
                                                                                   name="permisions[]"> </span> </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </table>
                                            </div>

                                        </div>
                                        <div class="card-footer text-muted">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                           </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                <a href="{!! route('admin.roles.index') !!}"
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
@endsection
