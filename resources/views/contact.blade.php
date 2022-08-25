<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/contact.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:12 GMT -->
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <!-- Stylesheets -->


    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="{!! asset('css/color-switcher-design.css')!!}" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="{!! asset('css/color-themes/default-theme.css')!!}" rel="stylesheet">

    <link rel="shortcut icon" href="{!! asset('images/favicon.png')!!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('images/favicon.png')!!}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('js/respond.js')}}"></script><![endif]-->
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
            <h2>Contact us</h2>
            <ul class="page-breadcrumb">
                <li><a href="{!! route('index') !!}">home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="title-box">
                <div class="title">GET IN TOUCH</div>
                <h2>A Monthly Project Fee <br> Price Plans</h2>
                <div class="text">For genereal enquires you can touch with our front desk supporting team <br> at <a
                        href="mailto:info@example.com">info@example.com</a> or call on <a href="tel:+8.555.55.55">+8.555.55.55</a>
                </div>
            </div>

            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
                                <li><strong>Address</strong></li>
                                <li>125, Suitland Street, USA</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <ul>
                                <li><strong>Phone</strong></li>
                                <li>+ 786 875 864 75</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-email-1"></span></div>
                            <ul>
                                <li><strong>E-Mail</strong></li>
                                <li>support@globex.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Info Section -->

    <!-- Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!--Map Outer-->
                <div class="map-outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3340382.487781394!2d-82.10505971022862!3d35.154319437546285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2s!4v1646376614645!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">SEND YOUR MESSAGE</div>
                        <h2>Send Your Message</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br>
                            positions in their respective industries and our team works.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <!-- Contact Form -->
                <form method="post" action="{!! route('contact_form.store') !!}" id="contact-form"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row clearfix">

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Your name *</label>
                            <input type="text" name="name" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Email address *</label>
                            <input type="text" name="email" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Phone number *</label>
                            <input type="text" name="phone" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>Website *</label>
                            <input type="text" name="website" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label>Your Message *</label>
                            <textarea name="message" placeholder=""></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button class="theme-btn btn-style-three" type="submit"><span class="txt">Send Now</span>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- End Contact Form -->
        </div>
    </section>
    <!-- End Contact Map Section -->


</div>
<!--End pagewrapper-->


@include('layouts.footer')


</body>

<!-- Mirrored from expert-themes.com/html/globex/contact.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:30:12 GMT -->
</html>
