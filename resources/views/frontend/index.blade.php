
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>Mone - Personal Portfolio Template</title>
		<!-- Favicon -->
        <link href="{{ asset('frontend_assets') }}/images/favicon.png" rel="shortcut icon">
		<!-- CSS -->
		<link href="{{ asset('frontend_assets') }}/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('frontend_assets') }}/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="{{ asset('frontend_assets') }}/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">
		<link href="{{ asset('frontend_assets') }}/css/theme.css" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="{{ asset('frontend_assets') }}/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="{{ asset('frontend_assets') }}/plugins/fontawesome/css/all.css" rel="stylesheet">
	</head>
	<body data-preloader="true">

		<!-- Cursor -->
		<div id="cursor"></div>
		<!-- end Cursor -->

		<!-- Header -->
		<div class="header">
			<div class="container-fluid">
				<div class="header-wrapper">
					<!-- Header Logo -->
					<div class="header-logo">
						<h2>Mone</h2>
					</div>
					<!-- Header Nav -->
					<div class="header-nav">
						<a class="button button-sm button-dot me-2 me-lg-3" href="#contact">
							<span data-text="Let's Talk">Let's Talk</span>
						</a>
						<!-- Nav Menu Toggle -->
						<button id="nav-toggle" class="button button-sm button-dot button-white">
							<span data-text="Menu">Menu</span>
						</button>
						<!-- Nav Menu Box -->
						<div class="nav-box">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="#about"><i class="bi bi-arrow-right"></i>About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#services"><i class="bi bi-arrow-right"></i>Services</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#portfolio"><i class="bi bi-arrow-right"></i>Portfolio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#awards"><i class="bi bi-arrow-right"></i>Awards</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#testimonial"><i class="bi bi-arrow-right"></i>Testimonial</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#blog"><i class="bi bi-arrow-right"></i>Blog</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact"><i class="bi bi-arrow-right"></i>Contact</a>
								</li>
							</ul>
						</div>
					</div><!-- end header-nav -->
				</div><!-- end header-wrapper -->
			</div><!-- end container -->
		</div>
		<!-- end Header -->

		<main data-bs-spy="scroll" data-bs-target=".nav-box">

			<!-- Hero section -->
			<div id="about" class="hero-section">
				<div class="container text-center">
					<div class="row">
						<div class="col-12">
							<h1 class="hero-heading display-1 fw-bold mb-0 stroke-text">Arthur Jackson</h1>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Hero section -->

			<!-- About section -->
			<div class="container">
				<div class="row g-4 g-md-5">
					<div class="col-12 col-lg-4 order-lg-2 text-center">
						<!-- Hero Avatar -->
						<div class="hero-avatar">
							<img src="{{ asset('frontend_assets') }}/images/hero-avatar.jpg" alt="">
						</div>
						<!-- end Hero Avatar -->
					</div>
					<div class="col-12 col-lg-4 order-lg-1">
						<div class="row g-4 g-lg-5">
							<div class="col-12 col-md-4 col-lg-12">
								<h6 class="sm-heading">Biography</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="col-6 col-md-4 col-lg-12">
								<h6 class="sm-heading">Skills</h6>
								<ul class="list-inline-dot">
									<li>Web Development</li>
									<li>UI & UX Design</li>
									<li>Marketing</li>
									<li>SEO</li>
									<li>Management</li>
								</ul>
							</div>
							<div class="col-6 col-md-4 col-lg-12">
								<h6 class="sm-heading">Connect</h6>
								<ul class="list-inline">
									<li>
										<a class="button-circle button-circle-sm" href="#">
											<i class="bi bi-facebook"></i>
											<i class="bi bi-facebook"></i>
										</a>
									</li>
									<li>
										<a class="button-circle button-circle-sm" href="#">
											<i class="bi bi-twitter"></i>
											<i class="bi bi-twitter"></i>
										</a>
									</li>
									<li>
										<a class="button-circle button-circle-sm" href="#">
											<i class="bi bi-instagram"></i>
											<i class="bi bi-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
						</div><!-- end row(inner) -->
					</div>
					<div class="col-12 col-md-12 col-lg-4 order-lg-3 text-lg-end">
						<div class="row g-4 g-lg-5">
							<div class="col-4 col-lg-12">
								<h6 class="sm-heading">Projects Done</h6>
								<h1 class="fw-light display-4 mb-0 line-height-110">432</h1>
							</div>
							<div class="col-4 col-lg-12">
								<h6 class="sm-heading">Years of Experience</h6>
								<h1 class="fw-light display-4 mb-0 line-height-110">13+</h1>
							</div>
							<div class="col-4 col-lg-12">
								<h6 class="sm-heading">Worldwide Clients</h6>
								<h1 class="fw-light display-4 mb-0 line-height-110">900</h1>
							</div>
						</div><!-- end row(inner) -->
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
			<!-- end About section -->

			<!-- Services section -->
			<div id="services" class="section">
				<div class="container">
					<div class="row g-4 g-xl-5">
						<div class="col-12 col-xl-4">
							<span class="title-heading text-white-04">Services</span>
							<h1 class="display-3 fw-medium mb-0">What I <span class="text-gradient">Do</span></h1>
						</div>
						<div class="col-12 col-xl-8">
							<div class="row g-4">
								<!-- Service box 1 -->
								<div class="col-12">
									<div class="service-box">
										<div class="service-order">
											<h3>01/</h3>
										</div>
										<div class="service-title">
											<i class="bi bi-brush"></i>
											<h3>Design</h3>
										</div>
										<div class="service-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut</p>
										</div>
									</div>
								</div>
								<!-- Service box 2 -->
								<div class="col-12">
									<div class="service-box">
										<div class="service-order">
											<h3>02/</h3>
										</div>
										<div class="service-title">
											<i class="bi bi-code-slash"></i>
											<h3>Development</h3>
										</div>
										<div class="service-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et</p>
										</div>
									</div>
								</div>
								<!-- Service box 3 -->
								<div class="col-12">
									<div class="service-box">
										<div class="service-order">
											<h3>03/</h3>
										</div>
										<div class="service-title">
											<i class="bi bi-laptop"></i>
											<h3>Marketing</h3>
										</div>
										<div class="service-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore</p>
										</div>
									</div>
								</div>
								<!-- end Service box 3 -->
							</div><!-- end row(inner) -->
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Services section -->

			<!-- Clients section -->
			<div class="section pt-0">
				<div class="container">
					<div class="swiper clients-slider">
						<div class="swiper-wrapper">
							<!-- Slider Item 1 -->
							<div class="swiper-slide">
								<div class="client-box">
									<a href="#">
										<img src="{{ asset('frontend_assets') }}/images/client-logo.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- Slider Item 2 -->
							<div class="swiper-slide">
								<div class="client-box">
									<a href="#">
										<img src="{{ asset('frontend_assets') }}/images/client-logo.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- Slider Item 3 -->
							<div class="swiper-slide">
								<div class="client-box">
									<a href="#">
										<img src="{{ asset('frontend_assets') }}/images/client-logo.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- Slider Item 4 -->
							<div class="swiper-slide">
								<div class="client-box">
									<a href="#">
										<img src="{{ asset('frontend_assets') }}/images/client-logo.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- Slider Item 5 -->
							<div class="swiper-slide">
								<div class="client-box">
									<a href="#">
										<img src="{{ asset('frontend_assets') }}/images/client-logo.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- Slider Item 6 -->
							<div class="swiper-slide">
								<div class="client-box">
									<a href="#">
										<img src="{{ asset('frontend_assets') }}/images/client-logo.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- end Slider Item 6 -->
						</div><!-- end swiper-wrapper -->
					</div><!-- end clients-slider -->
				</div><!-- end container -->
			</div>
			<!-- end Clients section -->

			<!-- Portfolio section -->
			<div id="portfolio" class="section-box">
				<div class="section-sm bg-dark border-radius-1">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
								<span class="title-heading text-white-04">Portfolio</span>
								<h1 class="display-3 fw-medium">Recent <span class="text-gradient">Works</span></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation</p>
								<!-- Slider Nav -->
								<div class="mt-4">
									<div class="swiper-portfolio-prev button-circle cursor-link">
										<i class="bi bi-arrow-left"></i>
										<i class="bi bi-arrow-left"></i>
									</div>
									<div class="swiper-portfolio-next button-circle cursor-link">
										<i class="bi bi-arrow-right"></i>
										<i class="bi bi-arrow-right"></i>
									</div>
								</div>
								<!-- end Slider Nav -->
							</div>
						</div><!-- end row -->
						<div class="swiper portfolio-slider mt-4 mt-lg-5">
							<div class="swiper-wrapper">
								<!-- Slider Item 1 -->
								<div class="swiper-slide">
									<div class="portfolio-box">
										<!-- Image -->
										<div class="portfolio-img">
											<a href="#">
												<img src="{{ asset('frontend_assets') }}/images/portfolio-img.jpg" alt="">
											</a>
										</div>
										<div class="pt-4">
											<!-- Categories -->
											<ul class="list-inline-dot sm-heading text-white mb-2">
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
											</ul>
											<!-- Caption -->
											<h2>
												<a class="portfolio-caption" href="#">
													<i class="bi bi-arrow-right"></i>
													Project Title Here
												</a>
											</h2>
										</div>
									</div><!-- end portfolio-box -->
								</div>
								<!-- Slider Item 2 -->
								<div class="swiper-slide">
									<div class="portfolio-box">
										<!-- Image -->
										<div class="portfolio-img">
											<a href="#">
												<img src="{{ asset('frontend_assets') }}/images/portfolio-img.jpg" alt="">
											</a>
										</div>
										<div class="pt-4">
											<!-- Categories -->
											<ul class="list-inline-dot sm-heading text-white mb-2">
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
											</ul>
											<!-- Caption -->
											<h2>
												<a class="portfolio-caption" href="#">
													<i class="bi bi-arrow-right"></i>
													Project Title Here
												</a>
											</h2>
										</div>
									</div><!-- end portfolio-box -->
								</div>
								<!-- Slider Item 3 -->
								<div class="swiper-slide">
									<div class="portfolio-box">
										<!-- Image -->
										<div class="portfolio-img">
											<a href="#">
												<img src="{{ asset('frontend_assets') }}/images/portfolio-img.jpg" alt="">
											</a>
										</div>
										<div class="pt-4">
											<!-- Categories -->
											<ul class="list-inline-dot sm-heading text-white mb-2">
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Category">Category</span>
													</a>
												</li>
											</ul>
											<!-- Caption -->
											<h2>
												<a class="portfolio-caption" href="#">
													<i class="bi bi-arrow-right"></i>
													Project Title Here
												</a>
											</h2>
										</div>
									</div><!-- end portfolio-box -->
								</div>
								<!-- end Slider Item 3 -->
							</div><!-- end swiper-wrapper -->
						</div><!-- end portfolio-slider -->
					</div><!-- end container -->
				</div>
			</div>
			<!-- end Portfolio section -->

			<!-- Awards section -->
			<div id="awards" class="section pb-0">
				<div class="container">
					<div class="row g-4 g-xl-5">
						<div class="col-12 col-xl-4">
							<span class="title-heading text-white-04">Achievements</span>
							<h1 class="display-3 fw-medium mb-0">Awa<span class="text-gradient">rds</span></h1>
						</div>
						<div class="col-12 col-xl-8">
							<div class="row g-4">
								<!-- Award box 1 -->
								<div class="col-12 col-md-6">
									<div class="fancy-box">
										<h4>Award Title</h4>
										<h6 class="sm-heading text-white-04 mb-2">2023</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore</p>
									</div>
								</div>
								<!-- Award box 2 -->
								<div class="col-12 col-md-6">
									<div class="fancy-box">
										<h4>Award Title</h4>
										<h6 class="sm-heading text-white-04 mb-2">2023</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et</p>
									</div>
								</div>
								<!-- Award box 3 -->
								<div class="col-12 col-md-6">
									<div class="fancy-box">
										<h4>Award Title</h4>
										<h6 class="sm-heading text-white-04 mb-2">2023</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore</p>
									</div>
								</div>
								<!-- Award box 4 -->
								<div class="col-12 col-md-6">
									<div class="fancy-box">
										<h4>Award Title</h4>
										<h6 class="sm-heading text-white-04 mb-2">2023</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore</p>
									</div>
								</div>
								<!-- end Award box 4 -->
							</div><!-- end row(inner) -->
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Awards section -->

			<!-- Testimonial section -->
			<div id="testimonial" class="section">
				<div class="container">
					<div class="swiper testimonial-slider">
						<div class="swiper-wrapper">
							<!-- Slider item 1 -->
							<div class="swiper-slide">
								<div class="testimonial-box">
									<div class="testimonial-avatar">
										<img src="{{ asset('frontend_assets') }}/images/testimonial-avatar.jpg" alt="">
									</div>
									<div class="testimonial-content">
										<div class="mb-3">
											<h3>Alexander Warren</h3>
											<span class="sm-heading text-white">CTO - Company</span>
										</div>
										<p class="fs-4 fw-normal fst-italic line-height-140">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
									</div>
								</div>
							</div>
							<!-- Slider item 2 -->
							<div class="swiper-slide">
								<div class="testimonial-box">
									<div class="testimonial-avatar">
										<img src="{{ asset('frontend_assets') }}/images/testimonial-avatar.jpg" alt="">
									</div>
									<div class="testimonial-content">
										<div class="mb-3">
											<h3>Alexander Warren</h3>
											<span class="sm-heading text-white">CTO - Company</span>
										</div>
										<p class="fs-4 fw-normal fst-italic line-height-140">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
									</div>
								</div>
							</div>
							<!-- Slider item 3 -->
							<div class="swiper-slide">
								<div class="testimonial-box">
									<div class="testimonial-avatar">
										<img src="{{ asset('frontend_assets') }}/images/testimonial-avatar.jpg" alt="">
									</div>
									<div class="testimonial-content">
										<div class="mb-3">
											<h3>Alexander Warren</h3>
											<span class="sm-heading text-white">CTO - Company</span>
										</div>
										<p class="fs-4 fw-normal fst-italic line-height-140">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Slider Pagination Progress -->
						<div class="swiper-testimonial-pagination"></div>
						<!-- end Slider Pagination Progress -->
					</div>
				</div><!-- end container -->
			</div>
			<!-- end Testimonial section -->

			<!-- Blog section -->
			<div id="blog" class="section-box">
				<div class="section-sm bg-dark border-radius-1">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
								<span class="title-heading text-white-04">Journal</span>
								<h1 class="display-3 fw-medium">Blog <span class="text-gradient">Posts</span></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation</p>
								<!-- Slider Nav -->
								<div class="mt-4">
									<div class="swiper-blog-prev button-circle cursor-link">
										<i class="bi bi-arrow-left"></i>
										<i class="bi bi-arrow-left"></i>
									</div>
									<div class="swiper-blog-next button-circle cursor-link">
										<i class="bi bi-arrow-right"></i>
										<i class="bi bi-arrow-right"></i>
									</div>
								</div>
								<!-- end Slider Nav -->
							</div>
						</div><!-- end row -->
						<div class="swiper blog-slider mt-4 mt-lg-5">
							<div class="swiper-wrapper">
								<!-- Slide Item 1 -->
								<div class="swiper-slide">
									<div class="blog-post-box">
										<div class="blog-post-img">
											<!-- Image -->
											<a class="blog-post-img-link" href="#">
												<img src="{{ asset('frontend_assets') }}/images/blog-img.jpg" alt="">
											</a>
											<!-- Category -->
											<div class="blog-post-category">
												<a href="#">
													<span data-text="Category">Category</span>
												</a>
											</div>
										</div>
										<div class="mt-4">
											<ul class="list-inline-dot sm-heading text-white mb-2">
												<li>
													<a class="link-hover" href="#">
														<span data-text="by Admin">by Admin</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Oct 8">Oct 8</span>
													</a>
												</li>
											</ul>
											<h2 class="mb-0">
												<a class="blog-caption" href="#">
													<i class="bi bi-arrow-right"></i>
													Blog Post Title
												</a>
											</h2>
										</div>
									</div>
								</div>
								<!-- Slide Item 2 -->
								<div class="swiper-slide">
									<div class="blog-post-box">
										<div class="blog-post-img">
											<!-- Image -->
											<a class="blog-post-img-link" href="#">
												<img src="{{ asset('frontend_assets') }}/images/blog-img.jpg" alt="">
											</a>
											<!-- Category -->
											<div class="blog-post-category">
												<a href="#">
													<span data-text="Category">Category</span>
												</a>
											</div>
										</div>
										<div class="mt-4">
											<ul class="list-inline-dot sm-heading text-white mb-2">
												<li>
													<a class="link-hover" href="#">
														<span data-text="by Admin">by Admin</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Oct 8">Oct 8</span>
													</a>
												</li>
											</ul>
											<h2 class="mb-0">
												<a class="blog-caption" href="#">
													<i class="bi bi-arrow-right"></i>
													Blog Post Title
												</a>
											</h2>
										</div>
									</div>
								</div>
								<!-- Slide Item 3 -->
								<div class="swiper-slide">
									<div class="blog-post-box">
										<div class="blog-post-img">
											<!-- Image -->
											<a class="blog-post-img-link" href="#">
												<img src="{{ asset('frontend_assets') }}/images/blog-img.jpg" alt="">
											</a>
											<!-- Category -->
											<div class="blog-post-category">
												<a href="#">
													<span data-text="Category">Category</span>
												</a>
											</div>
										</div>
										<div class="mt-4">
											<ul class="list-inline-dot sm-heading text-white mb-2">
												<li>
													<a class="link-hover" href="#">
														<span data-text="by Admin">by Admin</span>
													</a>
												</li>
												<li>
													<a class="link-hover" href="#">
														<span data-text="Oct 8">Oct 8</span>
													</a>
												</li>
											</ul>
											<h2 class="mb-0">
												<a class="blog-caption" href="#">
													<i class="bi bi-arrow-right"></i>
													Blog Post Title
												</a>
											</h2>
										</div>
									</div>
								</div>
							</div><!-- end swiper-wrapper -->
						</div><!-- end blog-slider -->
					</div><!-- end container -->
				</div>
			</div>
			<!-- end Blog section -->

			<!-- Contact section -->
			<div id="contact" class="section pb-0">
				<div class="container">
					<div class="row g-4 g-xl-5">
						<div class="col-12 col-xl-4">
							<span class="title-heading text-white-04">Contact</span>
							<h1 class="display-3 fw-medium mb-0">Let's <span class="text-gradient">Talk</span></h1>
						</div>
						<div class="col-12 col-xl-8">
							<div class="row g-4 g-lg-5">
								<div class="col-12 col-md-6">
									<h6 class="sm-heading">Email:</h6>
									<h3 class="mb-0">contact@flatheme.net</h3>
								</div>
								<div class="col-12 col-md-6">
									<h6 class="sm-heading">Call:</h6>
									<h3 class="mb-0">+123 456 7890</h3>
								</div>
							</div><!-- end row(inner) -->
							<!-- Contact Form -->
							<div class="contact-form mt-4 mt-lg-5 text-xl-end">
								<form method="post" id="contactform">
									<div class="row gx-3 gy-0">
										<div class="col-12 col-md-6">
											<input type="text" id="name" name="name" placeholder="Name" required>
										</div>
										<div class="col-12 col-md-6">
											<input type="email" id="email" name="email" placeholder="E-Mail" required>
										</div>
									</div>
									<input type="text" id="subject" name="subject" placeholder="Subject" required>
									<textarea name="message" id="message" placeholder="Message"></textarea>
									<button class="button button-dot" type="submit">
										<span data-text="Send Message">Send Message</span>
									</button>
								</form>
								<!-- Submit result -->
								<div class="submit-result">
									<span id="success">Thank you! Your Message has been sent.</span>
									<span id="error">Something went wrong, Please try again!</span>
								</div>
							</div><!-- end contact-form -->
						</div>
					</div><!-- end row -->
					<!-- Google Maps -->
					<div id="map1" class="gmap gmap-md border-radius-1 mt-5" data-latitude="51.513569" data-longitude="-0.123443"></div>
					<!-- end Google Maps -->
				</div><!-- end container -->
			</div>
			<!-- end Contact section -->

		</main>

		<!-- Footer -->
		<div class="py-4 py-lg-5 text-center">
			<p>&copy; 2023 FlaTheme, All Rights Reserved.</p>
		</div>
		<!-- end Footer -->

		<!-- Scroll To Top -->
		<div class="scrolltotop">
			<a class="button-circle" href="#">
				<i class="bi bi-arrow-up"></i>
				<i class="bi bi-arrow-up"></i>
			</a>
		</div>
		<!-- end Scroll To Top -->

		<!-- JavaScripts -->
		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script src="{{ asset('frontend_assets') }}/plugins/jquery.min.js"></script>
		<script src="{{ asset('frontend_assets') }}/plugins/plugins.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/functions.js"></script>
	</body>
</html>
