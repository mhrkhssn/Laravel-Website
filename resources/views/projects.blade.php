<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/projects.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:56 GMT -->
<head>
    <meta charset="utf-8">
    <title>Projects</title>
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
{{--    <div class="preloader"></div>--}}
@include('layouts.file_links')
@include('layouts.header')


<!--Page Title-->
    <section class="page-title">

        <div class="auto-container">
            <h2>Projects</h2>
            <ul class="page-breadcrumb">
                <li><a href="{!! route('index') !!}">home</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">LATEST CASE STUDIES</div>
                <h2>Reads Now Our Recent <br> Projects Studies</h2>
            </div>
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
            {{--            @dd($subcatogories)--}}
            <!--Filter-->
                <div class="filters clearfix">

                    <ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="filter active" data-role="button" data-filter="all" id="all">All</li>
                        @foreach($catogories as $item)
                            <li class="filter" data-role="button" data-filter="all"
                                id="{!! $item->slug !!}">{!! $item->name !!}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="filter-list row clearfix">
                @foreach($subcatogories as $item)
                    <!-- Case Block -->
                        <div class="case-block col-lg-4 col-md-6 col-sm-12" style="margin: 0px auto">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset($item->icon) }}" alt=""/>
                                    <div class="overlay-box">
                                        {{--                                        <a href="" data-fancybox="gallery" data-caption=""--}}
                                        {{--                                           class="search-icon"><span class="icon flaticon-search"></span></a>--}}
                                        <div class="content">
                                            <h4><a href="{!! route('project',$item->slug) !!}">{!! $item->name !!}</a>
                                            </h4>
                                            <div class="category">
                                                {!! $item->cat_name->name !!}
                                            </div>
                                        </div>
                                        <a href="{!! route('project',$item->slug) !!}"
                                           class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="btn-box text-center">
                    <a href="{!! route('slug','contact') !!}" class="theme-btn btn-style-three"><span class="txt">Send Massage</span></a>
                </div>

            </div>
        </div>
    </section>


</div>
<!--End pagewrapper-->

@include('layouts.footer')


</body>

<!-- Mirrored from expert-themes.com/html/globex/projects.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:58 GMT -->
</html>
