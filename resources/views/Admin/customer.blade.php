@extends('Admin.layouts.main')

@section('title')
    File Import/Export
@stop

@section('content')
<div class="container" style="margin-top: 5rem;">
    @if($message = Session::get('success'))
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Success!</strong> {{ $message }}
        </div>
    @endif
    {!! Session::forget('success') !!}
    <br />
    <h2 class="text-title">Import Export Excel/CSV</h2>
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('admin.import') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <select required name="web" class="form-select" aria-label="Default select example">
            <option value="" selected>Select Web</option>
            @foreach ($webs as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
        <input required  type="file" name="import_file" />
        <button class="btn btn-primary">Import File</button>
    </form>
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('admin.export') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <select required name="web_id" class="form-select" aria-label="Default select example">
            <option value="" selected>Select Web</option>
            @foreach ($webs as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
          <select required name="fileType" class="form-select" aria-label="Default select example">
            <option value="" selected>Select file Type</option>
            <option value="xls">xlx</option>
            <option value="xlsx">xlsx</option>
            <option value="csv">csv</option>
          </select>
          <button class="btn btn-primary">Download File</button>
        {{-- <a href="{{ route('export', 'xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
    <a href="{{ route('export', 'xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
    <a href="{{ route('export', 'csv') }}"><button class="btn btn-success">Download CSV</button></a> --}}
    </form>
</div>

@stop
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
@endsection
