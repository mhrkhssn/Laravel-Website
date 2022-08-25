<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @include('Admin.layouts.css')
</head>
<body>
<div class="container-fuild">
    <div id="main-wrapper" class="dsy-main-wrapper">
        <div class="dsy-page">
            <div class="dsy-page-content vertical-menu">
                <header class="header">
                    @include('Admin.layouts.side')
                    @include('Admin.layouts.header')
                </header>
                <div style="min-height: 768px;">
                    <div class="container">
                        <div class="row ">
                            <div class="col-8 offset-1">
                                @if(Session::has('flash_message_sucess'))
                                    <div
                                        class="mt-5 alert   alert-dismissible fade show {{Session::get('alert-class') }}    "
                                        role="alert">
                                        <span class="left-icon"><i class="fas fa-check-double"></i></span>
                                        {{Session::get('flash_message_sucess') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true" class="fas fa-times-circle"></span>
                                        </button>
                                    </div>
                                @endif

                                @if (Session::has('flash_message_danger'))
                                    <div class="alert alert-danger alert-dismissible fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><i
                                                class="icon fa fa-check"></i>{{Session::get('flash_message_danger') }}
                                        </strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="w-100  mt-5">@yield('content')</div>
                </div>
                @include('Admin.layouts.footer')
            </div>
        </div>
    </div>
</div>
@include('Admin.layouts.js')
<script>
    $(document).ready(function() {
        $('.select').select2();
    });
</script>
</body>
</html>
