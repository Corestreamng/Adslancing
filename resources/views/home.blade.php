@extends('layouts.template')
@php
    $show_hero = True;
@endphp
@section('title', 'hompage')
@section('content')

	<!-- ======= About Section ======= -->
	<section id="about" class="about">
	  <div class="container">

		<div class="row no-gutters">
		  <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
		  <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
			<div class="content d-flex flex-column justify-content-center">
			  <h3>Adslancing</h3>
			  <p>
			   is a Digital marketing platforms that allows you to reach out to large audience.
			   Our team of marketers live and breathe the work we do and we belive in building long term relationships with client based uponshared ideals and success.<h2>Our Service will commence 24th/04/2021</h2>
			  </p>
			  <div class="row">
				<div class="col-md-6 icon-box">
				  <i class="bx bxl-facebook"></i>
				  <h4>Social Media Marketing</h4>
				  <p>Focused social media strategy is an essential element of any business</p>
				</div>
				<div class="col-md-6 icon-box">
				  <i class="bx bxl-youtube"></i>
				  <h4>Pay per click</h4>
				  <p>With ppc advertising, you can control over your ads</p>
				</div>
				<div class="col-md-6 icon-box">
				  <i class="bx bxl-twitter"></i>
				  <h4>Link Building</h4>
				  <p>Our Link building encompasses content to get people talking about you.</p>
				</div>
				<div class="col-md-6 icon-box">
				  <i class="bx bxl-instagram"></i>
				  <h4>Blog post</h4>
				  <p>Quality blog posts to boost traffic coming to your website.</p>
				</div>
			  </div>
			</div><!-- End .content-->
		  </div>
		</div>

	  </div>
	</section><!-- End About Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
	  <div class="container">

		<div class="row no-gutters">

		  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
			<div class="count-box">
			  <i class="bi bi-emoji-smile"></i>
			  <span data-purecounter-start="0" data-purecounter-end="59987" data-purecounter-duration="1" class="purecounter"></span>
			  <p><strong>Of satisfied </strong> Clients</p>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
			<div class="count-box">
			  <i class="bi bi-journal-richtext"></i>
			  <span data-purecounter-start="0" data-purecounter-end="889" data-purecounter-duration="1" class="purecounter"></span>
			  <p><strong>Projects</strong>completed</p>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
			<div class="count-box">
			  <i class="bi bi-headset"></i>
			  <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
			  <p><strong>Hours of prompt</strong> Support </p>
			</div>
		  </div>

		  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
			<div class="count-box">
			  <i class="bi bi-people"></i>
			  <span data-purecounter-start="0" data-purecounter-end="19999" data-purecounter-duration="1" class="purecounter"></span>
			  <p><strong>Digital </strong>Marketers</p>
			</div>
		  </div>

		</div>

	  </div>
	</section><!-- End Counts Section -->

	<!-- ======= Clients Section ======= -->
	<section id="clients" class="clients section-bg">
	  <div class="container">

		<div class="row">

		  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
			<img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
		  </div>

		  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
			<img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
		  </div>

		  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
			<img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
		  </div>

		  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
			<img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
		  </div>

		  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
			<img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
		  </div>

		  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
			<img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
		  </div>

		</div>

	  </div>
	</section><!-- End Clients Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services">
	  <div class="container">

		<div class="section-title">
		  <h2>Our Services</h2>
		  <p>We optimize revenue and eliminate data-drudgery.</p>
		</div>

		<div class="row">
		  <div class="col-lg-4 col-md-6 icon-box">
			<div class="icon"><i class="bi bi-briefcase"></i></div>
			<h4 class="title"><a href="">PR</a></h4>
			<p class="description">Industry-Driven press eleases to build authority and reputation</p>
		  </div>
		  <div class="col-lg-4 col-md-6 icon-box">
			<div class="icon"><i class="bi bi-card-checklist"></i></div>
			<h4 class="title"><a href="">Digital marketing</a></h4>
			<p class="description">Improve your social media audience by increasing people that visit your page who are potential customers</p>
		  </div>
		  <div class="col-lg-4 col-md-6 icon-box">
			<div class="icon"><i class="bi bi-bar-chart"></i></div>
			<h4 class="title"><a href="">Blog post</a></h4>
			<p class="description">Quality blog posts to boost traffic coming to your website.</p>
		  </div>
		  <div class="col-lg-4 col-md-6 icon-box">
			<div class="icon"><i class="bi bi-binoculars"></i></div>
			<h4 class="title"><a href="">Video Boost</a></h4>
			<p class="description">Meticulously designed quality video boost that create a buzz</p>
		  </div>
		  <div class="col-lg-4 col-md-6 icon-box">
			<div class="icon"><i class="bi bi-brightness-high"></i></div>
			<h4 class="title"><a href="">SEO Analytics</a></h4>
			<p class="description">All of our SEO services feature a basic analytics pakage</p>
		  </div>
		  <div class="col-lg-4 col-md-6 icon-box">
			<div class="icon"><i class="bi bi-calendar4-week"></i></div>
			<h4 class="title"><a href="">E-commerce Boost</a></h4>
			<p class="description">We help boost to e-commerce business by connecting you with relevant customers</p>
		  </div>
		</div>

	  </div>
	</section><!-- End Services Section -->

	<!-- ======= Why Us Section ======= -->
	<section id="why-us" class="why-us">
	  <div class="container">

		<div class="section-title">
		  <h2>Why Us</h2>
		  <p>We are digital marketing agency that get you connected to your target clients.</p>
		</div>

		<div class="row">

		  <div class="col-lg-4">
			<div class="box">
			  <span>50+</span>
			  <h4>Platforms</h4>
			  <p>We have over 50 digital platform that allow our earning marketers to publish your advert</p>
			</div>
		  </div>

		  <div class="col-lg-4 mt-4 mt-lg-0">
			<div class="box">
			  <span>6 Million</span>
			  <h4>Affiliate Marketers</h4>
			  <p>we have millions of registered marketers that share your Ads on various platform</p>
			</div>
		  </div>

		  <div class="col-lg-4 mt-4 mt-lg-0">
			<div class="box">
			  <span>100%</span>
			  <h4> Customer Support</h4>
			  <p>Our customer services is topnotch as we have active and prompt personnel</p>
			</div>
		  </div>

		</div>

	  </div>
	</section><!-- End Why Us Section -->

	<!-- ======= Portfolio Section ======= -->
   <!--   <section id="portfolio" class="portfolio">
	  <div class="container">

		<div class="section-title">
		  <h2>Portfolio</h2>
		  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		</div>

		<div class="row">
		  <div class="col-lg-12 d-flex justify-content-center">
			<ul id="portfolio-flters">
			  <li data-filter="*" class="filter-active">All</li>
			  <li data-filter=".filter-app">App</li>
			  <li data-filter=".filter-card">Card</li>
			  <li data-filter=".filter-web">Web</li>
			</ul>
		  </div>
		</div>

		<div class="row portfolio-container">

		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>App 1</h4>
				<p>App</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>Web 3</h4>
				<p>Web</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>App 2</h4>
				<p>App</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>Card 2</h4>
				<p>Card</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>Web 2</h4>
				<p>Web</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>App 3</h4>
				<p>App</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>Card 1</h4>
				<p>Card</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>Card 3</h4>
				<p>Card</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
			<div class="portfolio-wrap">
			  <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
			  <div class="portfolio-info">
				<h4>Web 3</h4>
				<p>Web</p>
				<div class="portfolio-links">
				  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
				  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
				</div>
			  </div>
			</div>
		  </div>

		</div>

	  </div>-->
	</section><!-- End Portfolio Section -->

	<!-- ======= Team Section ======= -->
	<section id="team" class="team">
	  <div class="container">

		<div class="section-title">
		  <h2>Team</h2>
		  <p>Our Hardworking Team.</p>
		</div>

		<div class="row">

		  <div class="col-xl-3 col-lg-4 col-md-6">
			<div class="member">
			  <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
			  <div class="member-info">
				<div class="member-info-content">
				  <h4>Walter White</h4>
				  <span>Chief Executive Officer</span>
				  <div class="social">
					<a href=""><i class="bi bi-twitter"></i></a>
					<a href=""><i class="bi bi-facebook"></i></a>
					<a href=""><i class="bi bi-instagram"></i></a>
					<a href=""><i class="bi bi-linkedin"></i></a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
			<div class="member">
			  <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
			  <div class="member-info">
				<div class="member-info-content">
				  <h4>Sarah Jhonson</h4>
				  <span>Product Manager</span>
				  <div class="social">
					<a href=""><i class="bi bi-twitter"></i></a>
					<a href=""><i class="bi bi-facebook"></i></a>
					<a href=""><i class="bi bi-instagram"></i></a>
					<a href=""><i class="bi bi-linkedin"></i></a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
			<div class="member">
			  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
			  <div class="member-info">
				<div class="member-info-content">
				  <h4>William Anderson</h4>
				  <span>CTO</span>
				  <div class="social">
					<a href=""><i class="bi bi-twitter"></i></a>
					<a href=""><i class="bi bi-facebook"></i></a>
					<a href=""><i class="bi bi-instagram"></i></a>
					<a href=""><i class="bi bi-linkedin"></i></a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
			<div class="member">
			  <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
			  <div class="member-info">
				<div class="member-info-content">
				  <h4>Amanda Jepson</h4>
				  <span>Accountant</span>
				  <div class="social">
					<a href=""><i class="bi bi-twitter"></i></a>
					<a href=""><i class="bi bi-facebook"></i></a>
					<a href=""><i class="bi bi-instagram"></i></a>
					<a href=""><i class="bi bi-linkedin"></i></a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		</div>

	  </div>
	</section><!-- End Team Section -->

	<!-- ======= Pricing Section ======= -->
	<section id="pricing" class="pricing">
	  <div class="container">

		<div class="section-title">
		  <h2>Pricing</h2>
		  <p>Classic Style.</p>
		</div>

		<div class="row">

		  <div class="col-lg-4 col-md-6">
			<div class="box">
			  <h3>Starter</h3>
			  <h4><sup>$</sup>0<span> / month</span></h4>
			  <ul>
				<li>Business Analysing</li>
				<li>SEO Optimization</li>
				<li>Backlink Analysis</li>
				<li class="na">Customer support</li>
				<li class="na">Millions of share</li>
			  </ul>
			  <div class="btn-wrap">
				<a href="#" class="btn-buy">Subscribe</a>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
			<div class="box recommended">
			  <h3>Business</h3>
			  <h4><sup>$</sup>19<span> / month</span></h4>
			  <ul>
				<li>Everything in <b>Starter</b></li>
				<li>SEO optimization 24/7</li>
				<li>Customer Support</li>
				<li>Over 500k daily share</li>
				<li class="na">Millions of shares</li>
			  </ul>
			  <div class="btn-wrap">
				<a href="#" class="btn-buy">Subscribe</a>
			  </div>
			</div>
		  </div>

		  <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
			<div class="box">
			  <h3>Advanced</h3>
			  <h4><sup>$</sup>29<span> / month</span></h4>
			  <ul>
				<li>Strategy & Research</li>
				<li>Business Promotion</li>
				<li>Everything in <b>Business</b></li>
				<li>Millions of Daily Shares</li>
				<li>24/7 Cutomer support</li>
			  </ul>
			  <div class="btn-wrap">
				<a href="#" class="btn-buy">Subscribe</a>
			  </div>
			</div>
		  </div>

		</div>

	  </div>
	</section><!-- End Pricing Section -->

	<!-- ======= Frequently Asked Questions Section ======= -->
   <!-- <section id="faq" class="faq section-bg">
	  <div class="container">

		<div class="section-title">
		  <h2>Frequently Asked Questions</h2>
		  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		</div>

		<div class="faq-list">
		  <ul>
			<li data-aos="fade-up">
			  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
				<p>
				  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
				</p>
			  </div>
			</li>

			<li data-aos="fade-up" data-aos-delay="100">
			  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
				<p>
				  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
				</p>
			  </div>
			</li>

			<li data-aos="fade-up" data-aos-delay="200">
			  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
				<p>
				  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
				</p>
			  </div>
			</li>

			<li data-aos="fade-up" data-aos-delay="300">
			  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
				<p>
				  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
				</p>
			  </div>
			</li>

			<li data-aos="fade-up" data-aos-delay="400">
			  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
			  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
				<p>
				  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
				</p>
			  </div>
			</li>

		  </ul>
		</div>

	  </div>
	</section>-->
	<!-- End Frequently Asked Questions Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
	  <div class="container">

		<div class="section-title">
		  <h2>Contact</h2>
		  <p>For questions contact us here.</p>
		</div>

		<div class="row contact-info">

		  <div class="col-md-4">
			<div class="contact-address">
			  <i class="bi bi-geo-alt"></i>
			  <h3>Address</h3>
			  <address>A108 Adam Street, NY 535022, USA</address>
			</div>
		  </div>

		  <div class="col-md-4">
			<div class="contact-phone">
			  <i class="bi bi-phone"></i>
			  <h3>Phone Number</h3>
			  <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
			</div>
		  </div>

		  <div class="col-md-4">
			<div class="contact-email">
			  <i class="bi bi-envelope"></i>
			  <h3>Email</h3>
			  <p><a href="mailto:info@adslancing.com">info@adslancing.com</a></p>
			</div>
		  </div>

		</div>

		<div class="form mt-5">
		  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
			<div class="row">
			  <div class="col-md-6 form-group">
				<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
			  </div>
			  <div class="col-md-6 form-group mt-3 mt-md-0">
				<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
			  </div>
			</div>
			<div class="form-group mt-3">
			  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
			</div>
			<div class="form-group mt-3">
			  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
			</div>
			<div class="my-3">
			  <div class="loading">Loading</div>
			  <div class="error-message"></div>
			  <div class="sent-message">Your message has been sent. Thank you!</div>
			</div>
			<div class="text-center"><button type="submit">Send Message</button></div>
		  </form>
		</div>

	  </div>
	</section><!-- End Contact Section -->
    
@endsection