<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/blog_detail.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:11 GMT -->
<head>
    <meta charset="utf-8">
    <title>
        @if($post)
            {!! $post->title !!}
        @else
            Blog Detail
        @endif
    </title>
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
            <h2>Latest News</h2>
            <ul class="page-breadcrumb">
                <li><a href="{!! route('index') !!}">home</a></li>
                <li>News Update</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="news-detail">
                        <div class="inner-box">
                            <div class="upper-box">
                                <h3 class="text">{!! $post->title !!}</h3>
                            </div>
                            <div class="image">
                                <img src="{!! $post->image !!}" alt="{!! $post->image_alt !!}"/>
                                <div class="post-date">{!! date("d", strtotime($post->publish_time)) !!}
                                    <span>
                                        {!! date("M", strtotime($post->publish_time)) !!}
                                    </span>
                                </div>
                            </div>

                            <div class="lower-content">
                                <div class="row clearfix">
                                    {!! $post->post !!}
                                </div>
                                <!-- Post Share Options-->
                                <div class="post-share-options">
                                    <div class="post-share-inner clearfix">
                                        <div class="pull-left tags ">
                                            <b style="color: black">Related Tags :</b><br><br>
                                            @foreach($tag as $item)
                                                @if($item->tag!="")
                                                    <a href="{!! route('tag_search',$item->tag ) !!}"
                                                       class="m-1">{!! $item->tag !!}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <ul class="social-box pull-right">
                                            <li class="share">Share This Post :</li>
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={!! route('slug',$post->slug) !!}&display=popup">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/?url={!! route('slug',$post->slug) !!}">
                                                    <span class="fa fa-instagram"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <div class="sidebar-inner">

                            <!-- Categories Widget -->
                            <div class="sidebar-widget categories-widget">
                                <div class="sidebar-title">
                                    <h5>Categories :-</h5>
                                </div>
                                <div class="widget-content">
                                    <ul class="blog-cat">
                                        @foreach($blogs as $item)
                                            <li><a href="{!! route('blog_search',$item->name ) !!}">{!! $item->name !!}
                                                    <span>( {!! count($count) !!} )</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Categories Widget -->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h5>Recent Post :-</h5>
                                </div>
                                <div class="widget-content">
                                    @foreach($recent as $item)
                                        <article class="post ">
                                            <figure class="post-thumb">
                                                <img src="{!! $item->image !!}" alt="{!! $item->image_alt !!}" style="width: 100px;height: 100px">
                                                <a href="{!! route('slug',$item->slug) !!}" class="overlay-box">
                                                    <span class="icon fa fa-link"></span>
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <a href="{!! route('slug',$item->slug) !!}">
                                                    {!! $item->title !!}
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                {!! date("M d, Y", strtotime($item->publish_time)) !!}
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Popular Posts -->
                            <div class="sidebar-widget popular-tags pt-5">
                                <div class="sidebar-title">
                                    <h5>Tag Cloud :-</h5>
                                </div>
                                <div class="widget-content">
                                    @foreach($tags as $item)
                                        @if($item->tag!="")
                                            <a href="{!! route('tag_search',$item->tag ) !!}">{!! $item->tag !!}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Archives Widget -->
{{--                            <div class="sidebar-widget archives-widget">--}}
{{--                                <div class="sidebar-title">--}}
{{--                                    <h5>Archives :-</h5>--}}
{{--                                </div>--}}
{{--                                <ul class="archive-list">--}}
{{--                                    @foreach($posts->unique('publish_time') as $item)--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                {!! date("M Y", strtotime($item->publish_time)) !!}--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    <!-- News More Section -->
    <section class="news-more-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="new-post col-lg-6 col-md-12 col-sm-12">
                    <div class="post-inner">
                        <div class="content">
                            @if(isset($previous_post))
                                <div class="post-image">
                                    <img src="{!! $previous_post->image !!}"/>
                                </div>
                                <h4>
                                    <a href="{!! route('slug',$previous_post->slug) !!}">
                                        {!! $previous_post->title !!}
                                    </a>
                                </h4>
                                <a href="{!! route('slug',$previous_post->slug) !!}" class="more">Previous</a>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="new-post style-two col-lg-6 col-md-12 col-sm-12">
                    <div class="post-inner">
                        <div class="content">
                            @if(isset($next_post))
                                <div class="post-image">
                                    <img src="{!! $next_post->image !!}"/>
                                </div>
                                <h4>
                                    <a href="{!! route('slug',$next_post->slug) !!}">
                                        {!! $next_post->title !!}
                                    </a>
                                </h4>
                                <a href="{!! route('slug',$next_post->slug) !!}" class="more">Next</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News More Section -->


</div>
<!--End pagewrapper-->


@include('layouts.footer')


</body>

<!-- Mirrored from expert-themes.com/html/globex/blog_detail.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:12 GMT -->
</html>
