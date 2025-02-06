<!doctype html>
<html class="no-js" lang="zxx">
    <head>
       @include('home.css')
		
    </head>
    <body>
	
		<!-- Preloader -->
     

        <!-- End Preloader -->
		
	
	
		<!-- Header Area -->
		@include('home.header')
		<!-- End Header Area -->
		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" 
				
				style="background-image: url('/images/first.jpg'); 
            background-size: cover; 
            background-position: top center; 
            background-repeat: no-repeat; 
            width: 100%; 
            height: 95vh;"
				
				
				
				>
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Elevate Your <br> <span>Career</span> <br> Journey To <br> <span>SUCCESS!</span></h1>
									<p>Simple Steps to Your Dream Job  </p>
									<div class="button">
										<a href="/career-form" class="btn">BEGIN</a>
										<a href="/about" class="btn primary">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-group"></i>
									</div>
									<div class="single-content">
										<span>Join Our Community</span>
										<h4>Community</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-paper"></i>
									</div>
									<div class="single-content">
										<span>Subscribe To Newsletter</span>
										<h4>Newsletter</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>Join In The Routine</span>
										<h4>Routine</h4>
										<ul class="time-sidual">
											<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
											<li class="day">Saturday <span>9.00-18.30</span></li>
											<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
										</ul>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Discover Your Next Opportunity</h2>
							<img src=" {{asset ('/images/notebook.png') }} " alt="#" style="width: 40px; height: 40px;">
							<p>Create your profile, showcase your qualifications, and browse relevant job postings. Our intuitive platform makes job searching easy and efficient.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-graduate"></i>
							</div>
							<h3>Create Your Professional Profile</h3>
							<p>Showcase your skills, experience, and academic achievements to attract potential employers.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-link"></i>
							</div>
							<h3> Candidate Matching and Placement </h3>
							<p> Our dedicated team carefully reviews each candidate profile to identify the best matches for current job openings and opportunities.  </p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-diamond"></i>
							</div>
							<h3>Find Your Perfect Job</h3>
							<p> We may directly connect you with employers or present your profile as part of a shortlist, maximizing your chances of finding the perfect role.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-check"></i>
							<div class="content">
								<span class="counter">3468</span>
								<p>Active Members</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-4"></i>
							<div class="content">
								<span class="counter">5</span>
								<p>Administrators</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">379</span>
								<p>Happy Beneficiaries</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">3</span>
								<p>Years of Service</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>About Us</h2>
							<img src=" {{asset ('/images/about.png') }} " alt="#" style="width: 40px; height: 40px;">
							<p>Connecting Talent with Opportunity</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Our Mission</h3>

						
							<p>At This Company, we believe that everyone deserves the chance to find a fulfilling career. 
								 We're passionate about bridging the gap between talented individuals and the organizations that need them.
								  Our platform is designed to simplify the job search process and empower job seekers to take control of their professional journeys.</p>
						
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i><strong>Integrity:</strong> We are committed to ethical practices and transparency in all our interactions. </li>
										<li><i class="fa fa-caret-right"></i><strong>Innovation:</strong> We continually strive to improve our platform and services to better serve our users.</li>
										<li><i class="fa fa-caret-right"></i><strong>Collaboration:</strong> We believe in the power of collaboration and work closely with both candidates and employers.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i><strong>Excellence:</strong> We are dedicated to providing exceptional service and support. </li>
										<li><i class="fa fa-caret-right"></i><strong>Empowerment:</strong> We empower individuals to take ownership of their career paths.</li>
										
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=Ag2fJaNbw3Q" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Get in Touch</h2>
							<p>We'd love to hear from you!  Whether you have a question, feedback, or just want to say hello, please don't hesitate to reach out.  </p>
							
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		
		
		
		
		
		
		
		
		<!-- Start Appointment -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Send Us a Message</h2>
							<img src=" {{asset ('/images/speech-bubble.png') }} " alt="#" style="width: 40px; height: 40px;">
							<p>Have a question, comment, or suggestion? We'd love to hear from you!  Please fill out the form below, and we'll get back to you as soon as possible.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
							
								
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Send Message</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>( We will be confirm by an Text Message )</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src=" {{asset ('/images/comms.jpg')}} " alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		<section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Stay Updated</h6>
						
							<p class="">Subscribe to our newsletter to receive the latest news, job opportunities, <br> and career advice directly to your inbox.</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Your email address'" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		<!-- /End Newsletter Area -->
		


		<!-- Footer Area -->
		@include('home.foot')
			<!--/ End Footer Top -->



			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2025  |  All Rights Reserved by <a href="www.com" target="_blank">murage.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		@include('home.scripts')
    </body>
</html>