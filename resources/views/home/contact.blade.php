<!doctype html>
<html class="no-js" lang="zxx">
    <head>
       @include('home.css')
       <script src="https://kit.fontawesome.com/YOUR-KIT-CODE.js" crossorigin="anonymous"></script>

    </head>
    <body>
	
		<!-- Preloader -->
     

        <!-- End Preloader -->
		
	
	
		<!-- Header Area -->
		@include('home.header')
		<!-- End Header Area -->
		
		
        <br> <br> 
		
	

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Let's Connect!</h2>
							<img src=" {{asset ('/images/speech-bubble.png') }} " alt="#" style="width: 40px; height: 40px;">
							<p>We're here to support you. If you have any questions or need assistance, please don't hesitate to contact us. We're committed to providing prompt and helpful responses.</p>
						
                            <br>
                            <br>  <br>
                        
                        

                            <h3>📞 : +254712345678</h3>
                       <br> 
                     

                       <br>

                            <h3> <a href="mailto:info@myemail.com" > ✉️ :info@email.com</a></h3>

                        
                        </div>

					</div>
				</div>
				
			</div>
		</section>
		<!--/ End Feautes -->
		
	
		
		
		
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