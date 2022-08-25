<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/globex/about.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:52 GMT -->
<head>
<meta charset="utf-8">
<title>About Us</title>
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
    <div class="preloader"></div>

@include('layouts.header')
@include('layouts.file_links')


<!--Page Title-->
    <section class="page-title">

    	<div class="auto-container">
			<h2>About us</h2>
			<ul class="page-breadcrumb">
				<li><a href="index">home</a></li>
				<li>About us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

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
						<div class="text">Does any industry face a more complex audience journey and marketing sales process than B2B technology? Consider the number of people who influence a sale, the length of the decision-making cycle, the competing interests of the people who purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</div>
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
									<div class="feature-text">We’ll help you test bold new ideas while sharing your.</div>
								</div>
							</div>

						</div>

						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image theme-btn btn-style-one"><span class="txt"><i class="play-icon"><img src="images/icons/play-icon.png" alt="" /></i>&ensp; intro Video</span></a>

					</div>
				</div>

				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">

						<div class="images-outer parallax-scene-1">
							<div class="image" data-depth="0.10">
								<img src="{{ asset('images/resource/about-1.jpg')}}" alt="" />
							</div>

						</div>
					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- End About Section -->

	<!-- Counter Section -->
	<section class="counter-section">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Fact Counter -->
				<div class="fact-counter">
					<div class="row clearfix">

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3000" data-stop="330">0</span>+
									</div>
									<h4 class="counter-title">ACTIVE CLIENTS</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box alternate">
										<span class="count-text" data-speed="5000" data-stop="850">0</span>+
									</div>
									<h4 class="counter-title">PROJECTS DONE</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2000" data-stop="25">0</span>+
									</div>
									<h4 class="counter-title">TEAM ADVISORS</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3500" data-stop="10">0</span>+
									</div>
									<h4 class="counter-title">GLORIOUS YEARS</h4>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Section -->

	<!-- About Section Two -->
	<section class="about-section-two" style="background-image: url({{ asset('images/background/3.jpg')}})">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="circle-layer" style="background-image: url({{ asset('images/background/pattern-10.png')}})"></div>
						<div class="image">
							<img src="{{ asset('images/resource/about-5.jpg')}}" alt="" />
						</div>
					</div>
				</div>

				<!-- Skill Column -->
				<div class="skill-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Sec Title -->
						<div class="sec-title light">
							<div class="title">About Globax</div>
							<h2>Transform Your Business With The Leading IT Solution rovider.</h2>
							<div class="text">We listen. We advise. We design, together. Happy customers and ongoing relationships are what we strive for. Success is measured by results, the most important being how our clients feel about their experience with us.</div>
						</div>

						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Financial Accounting</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Tax Services</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
								</div>
							</div>


							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">BPO</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Virtual CFO</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="73">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="73"></div></div>
								</div>
							</div>

						</div>

						<!-- <a href="contact.blade.php" class="theme-btn btn-style-two"><span class="txt">Learn More</span></a> -->

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About Section Two -->


	<!--End Sponsors Section-->

	<!-- Process Section -->
    <section class="process-section">
		<div class="pattern-layer-one" style="background-image: url({{ asset('images/background/pattern-11.jpg')}})"></div>
		<div class="pattern-layer-two" style="background-image: url({{ asset('images/background/pattern-12.jpg')}})"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">OUR PROCESS</div>
				<h2>Driving Client Results Utilizing New <br> Innovation Points of view</h2>
			</div>
			<div class="row clearfix">

				<!-- Process Block -->
				<div class="process-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">01</div>
						<h4><a href="financial_accounting">End to End Solutions and Services Guaranteed</a></h4>
						<div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. per inceptos himenaeos.</div>
						<a class="read-more" href="financial_accounting"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
					</div>
				</div>

				<!-- Process Block -->
				<div class="process-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">02</div>
						<h4><a href="financial_accounting">Ahead of The Curve We Future-proof Your IT</a></h4>
						<div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. per inceptos himenaeos.</div>
						<a class="read-more" href="financial_accounting"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
					</div>
				</div>

				<!-- Process Block -->
				<div class="process-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">03</div>
						<h4><a href="financial_accounting">Experience Certainty Every Project Executed Successful</a></h4>
						<div class="text">Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. per inceptos himenaeos.</div>
						<a class="read-more" href="financial_accounting"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Read More</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Process Section -->

	<!-- Technology Section -->
	<section class="technology-section style-two" style="background-image: url({{ asset('images/background/1.jpg')}})">
		<div class="pattern-layer-one" style="background-image: url({{ asset('images/background/pattern-5.png')}})"></div>
		<div class="pattern-layer-two" style="background-image: url({{ asset('images/background/pattern-6.png')}})"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">TECHNOLOGY INDEX</div>
				<h2>Real Time Monitoring Your Infrstracture <br> Branded Degital Solutions</h2>
			</div>
			<div class="row clearfix">

				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-boxng" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-dashboard"></span>
						</div>
						<h6>Data Analytics</h6>
					</div>
				</div>

				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-box">
						<a href="financial_accounting" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-coding-3"></span>
						</div>
						<h6>Web Develpment</h6>
					</div>
				</div>

				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-boxng" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-design"></span>
						</div>
						<h6>Ul/UX Design</h6>
					</div>
				</div>

				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-box">
						<a href="financial_accounting" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-web-browser"></span>
						</div>
						<h6>QA & Testing</h6>
					</div>
				</div>

				<!-- Technology Block -->
				<div class="technology-block">
					<div class="inner-boxng" class="overlay-link"></a>
						<div class="icon-box">
							<span class="flaticon-network-1"></span>
						</div>
						<h6>Dedicated Team</h6>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Technology Section -->

	<!-- Experiance Section -->
	<section class="experiance-section" style="background-image: url({{ asset('images/background/pattern-9.png')}})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">EXPERIENCE. EXECUTION. EXCELLENCE.</div>
				<h2>What We Actually Do</h2>
			</div>

			<!-- Experiance Info Tabs -->
			<div class="experiance-info-tabs">
				<!-- Experiance Tabs -->
				<div class="experiance-tabs tabs-box">

					<!-- Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-html" class="tab-btn"><span class="icon flaticon-html"></span>HTML</li>
						<li data-tab="#prod-bootstrap" class="tab-btn"><span class="icon flaticon-bootstrap"></span>Bootstrap</li>
						<li data-tab="#prod-css" class="tab-btn active-btn"><span class="icon flaticon-css"></span>CSS</li>
						<li data-tab="#prod-php" class="tab-btn"><span class="icon flaticon-php"></span>Php</li>
						<li data-tab="#prod-java" class="tab-btn"><span class="icon flaticon-java"></span>JavaScript</li>
					</ul>

					<!--Tabs Container-->
					<div class="tabs-content">

						<!--Tab / Active Tab-->
						<div class="tab" id="prod-html">
							<div class="content">
								<h4>HTML Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="#" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-bootstrap">
							<div class="content">
								<h4>Bootstrap Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="#" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab active-tab" id="prod-css">
							<div class="content">
								<h4>CSS Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="#" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-php">
							<div class="content">
								<h4>Php Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="#" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-java">
							<div class="content">
								<h4>JavaScript Website Development Services</h4>
								<div class="text">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses <br> elevate their value through custom software development, product design, QA and consultancy services.</div>
								<div class="btn-box text-center">
									<a href="#" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Experiance Section -->





</div>
<!--End pagewrapper-->


@include('layouts.footer')


</body>

<!-- Mirrored from expert-themes.com/html/globex/about.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 10:29:52 GMT -->
</html>
