<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/project_detail.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:58 GMT -->
<head>
    <meta charset="utf-8">
    <title>
        {{$subcategory->name}}
    </title>
    <!-- Stylesheets -->


    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="{{ asset('css/color-themes/default-theme.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('js/respond.js') }}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
@include('layouts.file_links')
@include('layouts.header')



<!--Page Title-->
    <section class="page-title">

        <div class="auto-container">
            <h2>Project Detail</h2>
            <ul class="page-breadcrumb">
                <li><a href="{!! route('index') !!}">home</a></li>
                <li>Project Detail</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

<!-- Project Detail Section -->
    <section class="project-detail-section">
        <div class="auto-container">
            <div class="upper-section">
                <div class="row clearfix">
                <!-- Image Column -->
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title">{!! $relation->cat_name->name !!}</div>
                                <h2>{!! $subcategory->name !!}</h2>
                            </div>
                            <div class="image">
                                <img src="{{ asset($subcategory->image) }}" alt="{{ $subcategory->image_alt }}"/>
                            </div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12 mt-4">
                        <div class="inner-column">
                            <h4>Project Info</h4>
                            <div class="text">{!! $subcategory->s_description !!}</div>
                            <ul class="info-list">
                                <li><span
                                        class="icon flaticon-user"></span><strong>Client: </strong>{!! $subcategory->c_name !!}
                                </li>
                                <li><span
                                        class="icon fa fa-bookmark-o"></span><strong>Category: </strong>{!! $relation->cat_name->name !!}
                                </li>
                                <li><span
                                        class="icon flaticon-timetable"></span><strong>Date: </strong>{!! date("M d, Y", strtotime($subcategory->date)) !!}
                                </li>
                                <li><span
                                        class="icon fa fa-globe"></span><strong>Website: </strong>{!! $subcategory->website !!}
                                </li>
                                <li><span
                                        class="icon fa fa-map-marker"></span><strong>Location: </strong>{!! $subcategory->location !!}
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="lower-section">
                {!! $subcategory->description !!}

                <div class="buttons-box clearfix">
                    {{--                    <div class="pull-left">--}}
                    {{--                        <a href="#" class="theme-btn btn-style-three"><span class="txt"><i class="fa fa-angle-double-left"></i>&nbsp; Previous</span></a>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="pull-right">--}}
                    {{--                        <a href="#" class="theme-btn btn-style-three"><span class="txt">Next &nbsp;<i class="fa fa-angle-double-right"></i></span></a>--}}
                    {{--                    </div>--}}
                    <div class="pull-right">
                        <a href="{!! route('slug','projects') !!}" class="theme-btn btn-style-three"><span class="txt">All Projects <i
                                    class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End Cases Section Two -->


</div>
<!--End pagewrapper-->

@include('layouts.footer')


</body>

<!-- Mirrored from expert-themes.com/html/globex/project_detail.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:58 GMT -->
</html>
