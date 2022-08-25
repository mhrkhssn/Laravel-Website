<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/blog by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:06 GMT -->
<head>
    <meta charset="utf-8">
    <title>Search</title>
    <!-- Stylesheets -->


    <link
        href="https://fonts.googleapis.com/css2?family=Arial:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="{!! asset('css/color-switcher-design.css')!!}" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="{!! asset('css/color-themes/default-theme.css')!!}" rel="stylesheet">

    <link rel="shortcut icon" href="{!! asset('images/favicon.png')!!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('images/favicon.png')!!}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('js/respond.js')}}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        @include('layouts.file_links')
        @include('layouts.header')

        <div class="container" style="margin-top: 30px">
            <h3>Search Results</h3>
            @if(count($service) > 0)
                <div class="container" style="width: 100%">
                    <div class="row mt-2">
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Sr.#
                            </u>
                        </h4>
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Services
                            </u>
                        </h4>
                    </div>
                    @php
                        $id = 1;
                    @endphp
                    @foreach($service as $item)
                        <div class="row mt-2">
                            <div class="col-6">{!! $id++ !!}</div>
                            <div class="col-6">
                                <a href="{!! route('service',$item->slug) !!}">
                                    {!! $item->name !!}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div style="margin-left: 85%;margin-bottom: 5%;margin-top: 5%;">
                    <span>
                        <h4>
                            Total results: <b>
                                {!! count($service) !!}
                            </b>
                        </h4>
                    </span>
                </div>

            @elseif(count($project) > 0)
                <div class="container" style="width: 100%">
                    <div class="row mt-2">
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Sr.#
                            </u>
                        </h4>
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Projects
                            </u>
                        </h4>
                    </div>
                    @php
                        $id = 1;
                    @endphp
                    @foreach($project as $item)
                        <div class="row mt-2">
                            <div class="col-6">{!! $id++ !!}</div>
                            <div class="col-6">
                                <a href="{!! route('project',$item->slug) !!}">
                                    {!! $item->name !!}
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div style="margin-left: 85%;margin-bottom: 5%;margin-top: 5%;">
                        <span>
                            <h4>
                                Total results: <b>
                                    {!! count($project) !!}
                                </b>
                            </h4>
                        </span>
                    </div>
                </div>

            @elseif(count($blog) > 0)
                <div class="container" style="width: 100%">
                    <div class="row mt-2">
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Sr.#
                            </u>
                        </h4>
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Blogs
                            </u>
                        </h4>
                    </div>
                    @php
                        $id = 1;
                    @endphp
                    @foreach($blog as $item)
                        <div class="row mt-2">
                            <div class="col-6">{!! $id++ !!}</div>
                            <div class="col-6">
                                <a href="{!! route('slug','blog',$item->slug) !!}">
                                    {!! $item->name !!}
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div style="margin-left: 85%;margin-bottom: 5%;margin-top: 5%;">
                        <span>
                            <h4>
                                Total results: <b>
                                    {!! count($blog) !!}
                                </b>
                            </h4>
                        </span>
                    </div>
                </div>

            @elseif(count($post) > 0)
                <div class="container" style="width: 100%">
                    <div class="row mt-2">
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Sr.#
                            </u>
                        </h4>
                        <h4 class="col-6">
                            <u style="text-decoration-color:rgb(236, 158, 32)">
                                Posts
                            </u>
                        </h4>
                    </div>
                    @php
                        $id = 1;
                    @endphp
                    @foreach($post as $item)
                        <div class="row mt-2">
                            <div class="col-6">{!! $id++ !!}</div>
                            <div class="col-6">
                                <a href="{!! route('slug',$item->slug) !!}">
                                    {!! $item->title !!}
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div style="margin-left: 85%;margin-bottom: 5%;margin-top: 5%;">
                        <span>
                            <h4>
                                Total results: <b>
                                    {!! count($post) !!}
                                </b>
                            </h4>
                        </span>
                    </div>
                </div>
            @else
                <div class="text-center bg-light mt-5 mb-5" style="border-radius: 50px">
                    No Entries In Table...
                </div>
            @endif
        </div>
        @include('layouts.footer')
    </div>

</body>

<!-- Mirrored from expert-themes.com/html/globex/blog by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:07 GMT -->
</html>
