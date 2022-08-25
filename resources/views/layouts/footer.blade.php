@inject('helper','App\Helper\helper')
<footer class="main-footer">/
    <div class="pattern-layer-one" style="background-image: url({{ asset('images/background/pattern-7.png')}})"></div>
    <div class="pattern-layer-two" style="background-image: url({{ asset('images/background/pattern-8.png')}})"></div>
    <!--Waves end-->
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <h5>Alligient Service</h5>
                                </div>
                                <div class="text">We are the best world Information Technology Company. Providing the
                                    highest quality in hardware & Network solutions. About more than 25 years of
                                    experience and 1000 of innovative achievements.
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google"></a></li>
                                </ul>
                            </div>
                        </div>
                    @php
                        $service = $helper->service();
                    @endphp
                    <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Quick Links</h5>
                                <ul class="list-link">
                                    @foreach($service as $item)
                                        <li>
                                            <a href="{!! route('service',$item->slug) !!}">
                                                {!! $item->name !!}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <h5>Resent Post</h5>
                                <!-- Footer Column -->
                                <div class="widget-content">
                                    @php
                                        $post = $helper->post();
                                    @endphp
                                    @foreach($post as $item)
                                        <div class="post">
                                            <div class="thumb">
                                                <a href="{!! route('slug',$item->slug) !!}">
                                                    <img src="{!! asset($item->image) !!}">
                                                </a>
                                            </div>
                                            <h6>
                                                <a href="{!! route('slug',$item->slug) !!}">
                                                    {!! $item->title !!}
                                                </a>
                                            </h6>
                                            <span class="date">
                                            {!! date("M d, Y", strtotime($item->publish_time)) !!}
                                        </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h5>Contact Us</h5>
                                <ul>
                                    <li>
                                        <span class="icon flaticon-placeholder-2"></span>
                                        <strong>Address</strong>
                                        North Carolina, USA
                                    </li>
                                    <li>
                                        <span class="icon flaticon-phone-call"></span>
                                        <strong>Phone</strong>
                                        <a href="tel:+786-875-864-75">+ 786 875 864 75</a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-email-1"></span>
                                        <strong>E-Mail</strong>
                                        <a href="mailto:info@alligientservices.com">info@alligientservices.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright">Copyright &copy; 2022 by <a href="https://www.netrootstech.com/">NetRoots
                                Technologies.</a> All Rights Reserved.
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <ul class="footer-nav">
                            <li><a href="{!! route('slug','contact') !!}">About Us</a></li>
                            {{--                            <li><a href="">Services</a></li>--}}
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>


</div>

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
    <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
    <form method="get" action="{!! route('search') !!}">
        <div class="form-group">
            <input type="search" name="search" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('js/appear.js')}}"></script>
<script src="{{ asset('js/parallax.min.js')}}"></script>
<script src="{{ asset('js/tilt.jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery.paroller.min.js')}}"></script>
<script src="{{ asset('js/owl.js')}}"></script>
<script src="{{ asset('js/wow.js')}}"></script>
<script src="{{ asset('js/nav-tool.js')}}"></script>
<script src="{{ asset('js/jquery-ui.js')}}"></script>
<script src="{{ asset('js/script.js')}}"></script>
<script src="{{ asset('js/color-settings.js')}}"></script>
