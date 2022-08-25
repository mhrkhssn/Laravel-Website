<style>
    .dropdown-menu {
        min-width: 200px;
    }

    .dropdown-menu.columns-2 {
        min-width: 400px;
    }

    .dropdown-menu.columns-3 {
        min-width: 600px;
    }

    .dropdown-menu li a {
        padding: 5px 15px;
        font-weight: 300;
    }

    .multi-column-dropdown {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    .multi-column-dropdown li a {
        display: block;
        clear: both;
        line-height: 1.428571429;
        /*color: #333;*/
        white-space: normal;
    }

    .multi-column-dropdown li a:hover {
        text-decoration: none;
        /*color: #262626;*/
        /*background-color: #999;*/
    }

    @media (max-width: 767px) {
        .dropdown-menu.multi-column {
            min-width: 240px !important;
            overflow-x: hidden;
        }
    }
</style>
@inject('helper','App\Helper\helper')
<header class="main-header header-style-one">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!-- Top Left -->
                <div class="top-left">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li><a href="mailto:info@webmail.com"><span class="icon flaticon-email"></span> info@webmail.com</a>
                        </li>
                        <li><a href="tel:786-875-864-75"><span class="icon flaticon-telephone"></span> 786 875 864
                                75</a></li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="#" class="fa fa-facebook-f"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container clearfix">

            <div class="pull-left logo-box">
                <div class="logo"><a href="{!! route('index','') !!}"><img src="{{ asset('images/logow.PNG')}}" alt=""
                                                                           title=""></a></div>
            </div>

            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li>
                                <a href="{!! route('index','') !!} ">Home</a>
                            </li>
                            <li>
                                <a href="{!! route('slug','about') !!}">About</a>
                            </li>
                            <li class="dropdown"><a href="#">Services</a>
                                @php
                                    $service = $helper->serviceforheader();
                                    $bpo = $helper->main_cat_bpo();
                                    $ba = $helper->main_cat_ba();
                                    $index = 0;
                                    $i1 = 1;
                                @endphp
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li class="ml-3">
                                                    <h5><b>BPO:</b></h5>
                                                </li>
                                                <li>
                                                    <div style="height:35px; clear:both;"></div>
                                                </li>
                                                @foreach($bpo as $item)
                                                    @if ($index > 0 and $index % 6 == 0)
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <div style="height:67px; clear:both;"></div>
                                                </li>
                                                @endif
                                                <li>
                                                    <a href="{!! route('service',$item->slug) !!}">
                                                        <span style="color: black!important;">
                                                            {{$i1}}.
                                                        </span>
                                                        {!! $item->name !!}
                                                    </a>
                                                </li>
                                                @php
                                                    $index++;
                                                    $i1++;
                                                @endphp
                                                @endforeach
                                            </ul>
                                        </div>
                                        @php
                                            $i2 = 1;
                                        @endphp
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <li class="ml-3">
                                                    <h5><b>Business Advisory:</b></h5>
                                                </li>
                                                @foreach($ba as $item)
                                                    <li>
                                                        <a href="{!! route('service',$item->slug) !!}">
                                                            <span style="color: black!important;">
                                                                {{$i2}}.
                                                            </span>
                                                            {!! $item->name !!}
                                                        </a>
                                                    </li>
                                                    @php
                                                        $i2++;
                                                    @endphp
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="{!! route('slug','projects') !!}">Projects</a>

                            </li>

                            <li><a href="{!! route('slug','blog') !!}">Blog</a></li>

                            </li>
                            <li>
                                <a href="{!! route('slug','contact') !!}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">


                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                    <!-- Quote Btn -->
                    <div class="btn-box">
                        <a href="{!! route('slug','about') !!}" class="theme-btn btn-style-one"><span class="txt">Free Consulting</span></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{!! route('index','') !!}" title=""><img src="{{ asset('images/logow.PNG')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">


                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{!! route('index','') !!}"><img src="{{ asset('images/logow.PNG')}}" alt=""
                                                                           title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>

<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">

                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="{!! route('index','') !!}"><img src="{{ asset('images/logow.PNG')}}" alt=""/></a>
                        </div>
                        <div class="content-box">
                            <h2>About Us</h2>
                            <p class="text">The argument in favor of using filler text goes something like this: If you
                                use real content in the Consulting Process, anytime you reach a review point you’ll end
                                up reviewing and negotiating the content itself and not the design.</p>
                            <a href="{!! route('slug','contact') !!}" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-one">
                                <li><span class="icon fa fa-location-arrow"></span>North Carolina, USA</li>
                                <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                <li><span class="icon fa fa-envelope"></span>globex@gmail.com</li>
                                <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed
                                </li>
                            </ul>
                        </div>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                            <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                            <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                            <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                            <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
