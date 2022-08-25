<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/financial_accounting.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:55 GMT -->
<head>
    <meta charset="utf-8">

    <title>
        {{$category->name}}
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
            <h2>Service Detail</h2>
            <ul class="page-breadcrumb">
                <li><a href="{!! route('index') !!}">home</a></li>
                <li>Service</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">

                        <!-- Services -->
                        <div class="sidebar-widget">
                            <ul class="service-list">
                                @foreach($catogories as $item)
                                    @if($item->name == $category->name)
                                        <li class="current">
                                            <a href="{!! route('service',$item->slug) !!}"><span
                                                    class="arrow fa fa-angle-double-right"></span>
                                                {!! $item->name !!}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{!! route('service',$item->slug) !!}"><span
                                                    class="arrow fa fa-angle-double-right"></span>
                                                {!! $item->name !!}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <!-- Contact Widget -->
                        <div class="sidebar-widget contact-widget">
                            <div class="widget-content"
                                 style="background-image:url({{ asset('images/resource/service.jpg') }})">
                                <div class="border-layer"></div>
                                <div class="icon-box flaticon-phone-call"></div>
                                <h4>How Can We Help?</h4>
                                <div class="text">If you need any help, please <br> feel free to contact us.</div>
                                <ul>
                                    <li><span class="icon flaticon-call"></span>+1234567890</li>
                                    <li><span class="icon flaticon-envelope"></span>info@example.com</li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>

                <!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                    <div class="services-detail">
                        <div class="inner-box">
                            <h2>{{$category->name}}</h2>
                            <div class="image">
                                <img src="{{ asset($category->image) }}"  alt="{{ $category->image_alt }}"/>
                            </div>
                        </div>
                        {!! $category->description !!}
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<!--End pagewrapper-->


@include('layouts.footer')


</body>

<!-- Mirrored from expert-themes.com/html/globex/financial_accounting.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:56 GMT -->
</html>
