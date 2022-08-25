<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/blog by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:06 GMT -->
<head>
    <meta charset="utf-8">
    <title>Blogs</title>
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


<!--Page Title-->
    <section class="page-title">

        <div class="auto-container">
            <h2>Blogs</h2>
            <ul class="page-breadcrumb">
                <li><a href="{!! route('index') !!}">home</a></li>
                <li>News Update</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Page Section -->
    <section class="blog-page-section">
        <div class="auto-container">
            <div class="row clearfix">
            @foreach($posts as $item)
                <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12" style="margin: 0px auto">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{!! route('slug',$item->slug) !!}">
                                    <img src="{!! asset($item->image) !!}" alt="{!!$item->image_alt !!}" style="width: 400px;height: 500px"/>
                                </a>
                            </div>
                            <div class="lower-content">
                                <div class="post-date">
                                    {!! date("d", strtotime($item->publish_time)) !!}
                                    <span>
                                        {!! date("M, Y", strtotime($item->publish_time)) !!}
                                    </span>
                                </div>
                                <h4><a href="{!! route('slug',$item->slug) !!}">{!! $item->title !!}</a></h4>
                                <div class="text">
                                    {!!  \Illuminate\Support\Str::limit($item->post , 102, $end='...')!!}
                                </div>
                                <a class="read-more" href="{!! route('slug',$item->slug) !!}">Read More<span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>

            {{ $posts->links('vendor.pagination.custom') }}

        </div>
    </section>
    <!-- End Blog Page Section -->

    @include('layouts.footer')


</div>
<!--End pagewrapper-->


</body>

<!-- Mirrored from expert-themes.com/html/globex/blog by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:07 GMT -->
</html>
