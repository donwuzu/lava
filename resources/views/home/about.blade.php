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


        
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>About Us</h2>
							<img src=" {{asset ('/images/about.png') }} " alt="#" style="width: 40px; height: 40px;">							<p>Connecting Talent with Opportunity</p>
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