<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:28:47 GMT -->
<head>
    <meta charset="utf-8">
    <title>Alligient Services | Homepage</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('js/respond.js')}}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

<!-- Main Header-->
@include('layouts.file_links')
@include('layouts.header')
<!-- End Main Header -->

    <!-- Sidebar Cart Item -->

    <!-- END sidebar widget item -->

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url({{ asset('images/mainslider/banner1.jpg') }})">
                <div class="patern-layer-one"
                     style="background-image: url({{ asset('images/mainslider/pattern-1.png') }})"></div>
                <div class="patern-layer-two"
                     style="background-image: url({{ asset('images/mainslider/pattern-2.png') }})"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="patern-layer-three"
                                 style="background-image: url({{ asset('images/mainslider/pattern-3.png') }})"></div>
                            <div class="title">Business Consulting</div>
                            <h1>Our Agency Provide <br> Best Solutions</h1>
                            <div class="text">We are 100+ professional software engineers with more than <br> 10 years
                                of experience in delivering superior products.
                            </div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="slide" style="background-image: url({{ asset('images/mainslider/banner2.jpg') }})">
                <div class="patern-layer-one"
                     style="background-image: url({{ asset('images/mainslider/pattern-1.png') }})"></div>
                <div class="patern-layer-two"
                     style="background-image: url({{ asset('images/mainslider/pattern-2.png') }})"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="patern-layer-three"
                                 style="background-image: url({{ asset('images/mainslider/pattern-3.png') }})"></div>
                            <div class="title">Business Consulting</div>
                            <h1>Our Agency Provide <br> Best Solutions</h1>
                            <div class="text">We are 100+ professional software engineers with more than <br> 10 years
                                of experience in delivering superior products.
                            </div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </section>
    <!-- End Banner Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title">ABOUT COMPANY</div>
                <h2>You Can not Use Up <br> Creativity.</h2>
            </div>
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">Does any industry face a more complex audience journey and marketing sales
                            process than B2B technology? Consider the number of people who influence a sale, the length
                            of the decision-making cycle, the competing interests of the people who purchase, implement,
                            manage, and use the technology. It’s a lot meaningful content here.
                        </div>
                        <div class="blocks-outer">

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon flaticon-award-1"></div>
                                    <h6>Experience</h6>
                                    <div class="feature-text">Our great team of more than 1400 software experts.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon flaticon-technical-support"></div>
                                    <h6>Quick Support</h6>
                                    <div class="feature-text">We’ll help you test bold new ideas while sharing your.
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a href="#"
                           class="lightbox-image theme-btn btn-style-one"><span class="txt"><i class="play-icon"><img
                                        src="{{ asset('images/icons/play-icon.png')}}"
                                        alt=""/></i>&ensp; intro Video</span></a>

                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column" style="background-image: url({{ asset('images/icons/globeP.png') }})">
                        <div class="pattern-layer"
                             style="background-image: url({{ asset('images/background/pattern-1.png') }})"></div>
                        <div class="images-outer parallax-scene-1">
                            <div class="image" data-depth="0.10">
                                <img src="{{ asset('images/resource/about-1.jpg') }}" alt=""/>
                            </div>
                            <div class="image-two" data-depth="0.30">
                                <img src="{{ asset('images/resource/about-2.jpg') }}" alt=""/>
                            </div>
                            <div class="image-three" data-depth="0.20">
                                <img src="{{ asset('images/resource/about-3.jpg') }}" alt=""/>
                            </div>
                            <div class="image-four" data-depth="0.30">
                                <img src="{{ asset('images/resource/about-4.jpg') }}" alt=""/>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="learn"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Learn
                        More About Company</a>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Featured Block Two -->
                <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"
                         style="background-image: url({{ asset('images/resource/feature-1.jpg') }})">
                        <div class="number">35 +</div>
                        <h4>Worldwide Work Pair</h4>
                        <div class="text">To succeed, every software solution must be deeply integrated into the
                            existing tech environment..
                        </div>
                    </div>
                </div>

                <!-- Featured Block Two -->
                <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                         style="background-image: url({{ asset('images/resource/feature-2.jpg') }})">
                        <div class="number">40 k</div>
                        <h4>Happy Clients</h4>
                        <div class="text">To succeed, every software solution must be deeply integrated into the
                            existing tech environment..
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Services Section -->
    <section class="services-section margin-top">
        <div class="pattern-layer" style="background-image: url({{ asset('images/background/pattern-2.png') }})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title">WHO WE ARE</div>
                <h2>We deal with the aspects of <br> professional Services</h2>
            </div>
            <div class="row clearfix">
                @foreach($catogories as $item)
                    <div class="service-block col-md-3" style="margin: 0px auto">
                        <div class="inner-box">
                            <div class="icon-box">
                                <img src="{{ asset($item->icon) }}">
                            </div>
                            <h5>
                                <a href="{!! route('service',$item->slug) !!}">
                                    {!! $item->name !!}
                                </a>
                            </h5>
                            <div class="text">
                                {!! \Illuminate\Support\Str::limit($item->s_description, 102, $end='...') !!}
                            </div>
                            <a href="{!! route('service',$item->slug) !!}"
                               class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Services Section -->


    <!-- End Services Section Two -->

    <!-- Call To Action Section -->
    <section class="call-to-action-section"
             style="background-image: url({{ asset('images/background/pattern-3.png') }})">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Heading Column -->
                <div class="heading-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Preparing For Your Business <br> Success With IT Solution</h2>
                    </div>
                </div>
                <!-- Button Column -->
                <div class="button-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <a href="{!! route('slug','contact') !!}" class="theme-btn btn-style-two"><span class="txt">Meet With Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- Cases Section -->
    <section class="cases-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">LATEST CASE STUDIES</div>
                <h2>Reads Now Our Recent <br> Projects Studies</h2>
            </div>
            <div class="row clearfix">
                @foreach($subcatogories as $item)
                    <div class="case-block col-lg-4 col-md-6 col-sm-12" style="margin: 0px auto">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset($item->icon) }}" alt=""/>
                                <div class="overlay-box">
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

            {{--            <div class="section-text">We Have Done More Than 1K Projects in Last 3 Years, With 100% Satisfaction.</div>--}}

            <div class="btn-box text-center mt-5">
                <a href="{!! route('slug','projects') !!}" class="theme-btn btn-style-three"><span
                        class="txt">View All</span></a>
            </div>

        </div>
    </section>
    <!-- End Cases Section -->




    <section class="technology-section" style="background-image: url({{ asset('images/background/1.jpg') }})">
        <div class="pattern-layer-one"
             style="background-image: url({{ asset('images/background/pattern-5.png') }})"></div>
        <div class="pattern-layer-two"
             style="background-image: url({{ asset('images/background/pattern-6.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title">Industries We Work With</div>
                            <h2>Following are the Industries we Work with.</h2>
                        </div>
                    </div>
                </div>
                <!-- Blocks Column -->
                <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="#" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <img src="{{ asset('images/med.png') }}">
                                        <!-- <span class="flaticon-coding-2"></span> -->
                                    </div>
                                    <h6>MEDICAL</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="#" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <img src="{{ asset('images/restaurant.png') }}">
                                        <!-- <span class="flaticon-android"></span> -->
                                    </div>
                                    <h6>RESTAURANT</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="#" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <img src="{{ asset('images/hotel.png') }}">
                                        <!-- <span class="flaticon-apple"></span> -->
                                    </div>
                                    <h6>HOTELS</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="#" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <img src="{{ asset('images/steel.png') }}">
                                        <!-- <span class="flaticon-iot"></span> -->
                                    </div>
                                    <h6>STEEL MILLS</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="#" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <img src="{{ asset('images/textile.png') }}">
                                        <!-- <span class="flaticon-smartband"></span> -->
                                    </div>
                                    <h6>TEXTILE MILLS</h6>
                                </div>
                            </div>

                            <!-- Technology Block -->
                            <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <a href="#" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <img src="{{ asset('images/coca.png') }}">
                                        <!-- <span class="flaticon-tv"></span> -->
                                    </div>
                                    <h6>COCA COLA</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Technology Section -->

    <!-- Team Section -->
    <section class="team-section" style="background-image: url({{ asset('images/background/2.jpg') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">OUR DEDICATED TEAM</div>
                        <h2>We have Large No <br> of Expert Team Member</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br>
                            positions in their respective industries and our team works.
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                @foreach($team as $item)
                    <div class="team-block col-lg-3 col-md-6 col-sm-12 m-2">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset($item->image) }}" alt="{!! $item->image_alt !!}" style="height: 400px"/>
                            </div>
                            <div class="lower-box" style="height: 125px;width: 250px">
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="{!! $item->f_link !!}" title="{!! $item->f_link !!}"
                                           class="fa fa-facebook-f"></a></li>
                                    <li><a href="{!! $item->t_link !!}" title="{!! $item->t_link !!}"
                                           class="fa fa-twitter"></a></li>
                                    <li><a href="{!! $item->l_link !!}" title="{!! $item->l_link !!}"
                                           class="fa fa-linkedin"></a></li>
                                    <li><a href="{!! $item->i_link !!}" title="{!! $item->i_link !!}"
                                           class="fa fa-instagram"></a></li>
                                </ul>
                                <div class="content mt-4">
                                    <h5><a href="#">{!! $item->name !!}</a></h5>
                                    <div class="designation">{!! $item->designation !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Team Section -->


    <!-- Main Footer -->
@include('layouts.footer')

</body>

<!-- Mirrored from expert-themes.com/html/globex/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:23 GMT -->
</html>
