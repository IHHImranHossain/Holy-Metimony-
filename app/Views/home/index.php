<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Site Metas -->
	<title>BDShadi</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="public/user_home/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="public/user_home/images/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="public/home/css/bootstrap.min.css">
	<!-- Pogo Slider CSS -->
	<link rel="stylesheet" href="public/home/css/pogo-slider.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="public/home/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="public/home/css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="public/home/css/custom.css">




</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
	<div id="preloader">
		<div class="preloader pulse">
			<i class="fa fa-heartbeat" aria-hidden="true"></i>
		</div>
	</div><!-- end loader -->
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="<?=base_url() ?>">
					<img src="public/home/images/h1.png" alt="Holy Matrimony" class="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
					aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
					<ul class="navbar-nav">
						<li><a class="nav-link active" href="#home">Home</a></li>
						<li><a class="nav-link" href="#about">Find Partner</a></li>
						<li><a class="nav-link" href="#story">Story</a></li>
						<li><a class="nav-link" href="#gallery">Gallery</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>
						<li><a class="nav-link mobile_view" href="<?= base_url('user_login') ?>">Log In</a></li>
						<li><a class="nav-link mobile_view" href="<?= base_url('registration') ?>">Registration</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider" style="background-image:url(public/home/images/slider-01.jpg);">
						<div class="lbox-caption">
							<div class="lbox-details">
								<div class="front" id="front">
									<div class="front_title">
										<h2>We're getting married</h2>
										<p>Discover That <strong>Special Person</strong></p>
										<a href="<?= base_url('registration') ?>" class="btn ">Registration</a>
										<a href="<?= base_url('user_login') ?>" class="btn ">LogIn</a>
									</div>


									<h1>Find your perfect Wedding partner</h1>
									<div class="search">
										<div class="signup-form">
											<br>
											<div class="form-group">

												<label for="age_range">Looking For</label>
												<select name="looking_for" id="looking_for">
													<option selected disabled>Select Looking For
													</option>
													<?php 
                        											foreach($looking as $each)
                        											{
                    											?>

													<option value="<?php echo $each['id']; ?>">
														<?php echo $each['items_name']; ?></option>';

													<?php
                        											} 										
                    											?>
												</select>

												&nbsp;&nbsp;&nbsp;&nbsp;



												<label for="community">Community</label>
												<select name="community" id="community">
													<option selected disabled>Select Community
													</option>
													<?php 
                            										foreach($communitys as $each)
                            										{
                        										?>

													<option value="<?php echo $each['id']; ?>">
														<?php echo $each['items_name']; ?></option>';

													<?php
                            										} 
                        										?>
												</select>

												&nbsp;&nbsp;&nbsp;&nbsp;

												<label for="profession">Profession</label>


												<select name="profession" id="profession">
													<option value="" selected disabled>Select
														Profession</option>
													<?php 
                            										foreach($professions as $each)
                            										{
                        										?>

													<option value="<?php echo $each['id']; ?>">
														<?php echo $each['items_name']; ?></option>';

													<?php
                            										} 
                        										?>

												</select>

												&nbsp;&nbsp;&nbsp;&nbsp;

												<!-- Button trigger modal -->
												<button style="margin-left: 20px;" type="button"
													class="btn btn-primary modal_search" data-toggle="modal"
													data-target="#exampleModalCenter">
													Search
												</button>

												<!-- Modal -->
												<div class="modal fade" id="exampleModalCenter" tabindex="-1"
													role="dialog" aria-labelledby="exampleModalCenterTitle"
													aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle">
																	Please Login
																</h5>
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">





																<form class="login100-form validate-form" method="POST"
																	action="<?= base_url('login') ?>">
																	<span class="login100-form-title ">
																		Log In
																	</span>

																	<div class="wrap-input100 validate-input m-t-85 m-b-35"
																		data-validate="Enter username">
																		<input class="input100" type="email"
																			name="email">
																		<span class="focus-input100"
																			data-placeholder=""></span>
																	</div>

																	<div class="wrap-input100 validate-input m-b-50"
																		data-validate="Enter password">
																		<input class="input100" type="password"
																			name="password">
																		<span class="focus-input100"
																			data-placeholder=""></span>
																	</div>

																	<div class="container-login100-form-btn">
																		<button class="login100-form-btn">
																			Login
																		</button>
																	</div><br>
																</form>
																<ul class="login-more">
																	<li class="m-b-8">
																		<span class="txt1">
																			Forgot
																		</span>

																		<a href="#" class="txt2">
																			<button
																				class="btn btn-outline-danger">Username
																				/ Password?</button>
																		</a>
																	</li>

																	<li>
																		<span class="txt1">
																			Don’t have an account?
																		</span>

																		<a href="<?=base_url('registration') ?>"
																			class="txt2">
																			<button class="btn btn-outline-info">Sign
																				up</button>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Find your <span>Special</span> Someone</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="cardx">
									<div class="card-body about_card_body">
										<h2><i class="fas fa-user-edit fa-2x about_card_icon"></i></h2>
										<a href="" data-target="#exampleModalCenter" type="button" data-toggle="modal">
											<h2 class="card-title"><span class="about_card_title">Sign Up</span>
											</h2>
										</a>
										<h4 class="card-text">Register for free & put up your Profile</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="cardx">
									<div class="card-body about_card_body">
										<h2><i class="fas fa-user-friends fa-2x about_card_icon"></i></h2>
										<a href="" data-target="#exampleModalCenter" type="button" data-toggle="modal">
											<h2 class="card-title"><span class="about_card_title">Connect</span>
											</h2>
										</a>
										<h4 class="card-text">Select & Connect with Matches you like</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="cardx">
									<div class="card-body about_card_body">
										<h2><i class="fas fa-comments fa-2x about_card_icon"
												style="color: #dd666c;"></i></h2>
										<a href="" data-target="#exampleModalCenter" type="button" data-toggle="modal">
											<h2 class="card-title"><span class="about_card_title">Interact</span>
											</h2>
										</a>
										<h4 class="card-text">Become a Premium Member & After Connect Start a
											Conversation</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->

	<!-- Start Story -->
	<div id="story" class="story-box main-timeline-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Millions of Happy Stories</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="public/assets/img/mc1.jpg" alt="Avatar" style="width:300px;height:300px;">
							</div>
							<div class="flip-card-back story_card_body">
								<div class="person_name">
									<h2>Thirumoly & Somdeep</h2>
								</div>
								<div class="person_info">
									<p>I mate my life partner on Shaadi.com. While I create my profile, he is the one
										who sent
										1st request. He is so much good heart, gentlemen. He makes my whole family
										agrees for
										our marriage due I'm Malay...
										<a href="" data-target="#exampleModalCenter" type="button" data-toggle="modal">
											<span class="read_more_link"><i class="fas fa-arrow-right"></i>Read
												more</span></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="public/assets/img/w1.jpg" alt="Avatar" style="width:300px;height:300px;">
							</div>
							<div class="flip-card-back story_card_body">
								<div class="person_name">
									<h2>Thirumoly & Somdeep</h2>
								</div>
								<div class="person_info">
									<p>I mate my life partner on Shaadi.com. While I create my profile, he is the one
										who sent
										1st request. He is so much good heart, gentlemen. He makes my whole family
										agrees for
										our marriage due I'm Malay...
										<a href="" data-target="#exampleModalCenter" type="button" data-toggle="modal">
											<span class="read_more_link"><i class="fas fa-arrow-right"></i>Read
												more</span></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="public/assets/img/w2.jpg" alt="Avatar" style="width:300px;height:300px;">
							</div>
							<div class="flip-card-back story_card_body">
								<div class="person_name">
									<h2>Thirumoly & Somdeep</h2>
								</div>
								<div class="person_info">
									<p>I mate my life partner on Shaadi.com. While I create my profile, he is the one
										who sent
										1st request. He is so much good heart, gentlemen. He makes my whole family
										agrees for
										our marriage due I'm Malay...
										<a href="" data-target="#exampleModalCenter" type="button" data-toggle="modal">
											<span class="read_more_link"><i class="fas fa-arrow-right"></i>Read
												more</span></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
					<div class="time-line-date-content">
						<p class="mbr-timeline-date mbr-fonts-style display-font">
							1 March 2018
						</p>
					</div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">First meet</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							We met at the wedding of our close friends and immediately found a common language, so a
							year later our first date happened.
						</p>
					</div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
					<div class="time-line-date-content">
						<p class="mbr-timeline-date mbr-fonts-style display-font">
							2 April 2018
						</p>
					</div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">First date</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							We met at the wedding of our close friends and immediately found a common language, so a
							year later our first date happened.
						</p>
					</div>
				</div>
			</div>
			<div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
					<div class="time-line-date-content">
						<p class="mbr-timeline-date mbr-fonts-style display-font">
							1 May 2018
						</p>
					</div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Proposal</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet
							auctor
							quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis
							elit.
						</p>
					</div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
					<div class="time-line-date-content">
						<p class="mbr-timeline-date mbr-fonts-style display-font">
							2 June 2018
						</p>
					</div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Engagement</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							Proin tempus felis quis justo pretium interdum. Praesent sollicitudin lectus eu mattis
							egestas. Praesent luctus magna at dignissim placerat.
						</p>
					</div>
				</div>
			</div> -->

		</div>
	</div>
	<!-- End Story -->


	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						<p>Some couples pictures which are successfully done their marriage from Holy matrimony.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="popup-gallery clearfix">
					<li>
						<a href="public/home/images/gallery-01.jpg">
							<img class="img-fluid" src="public/home/images/gallery-01.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="public/home/images/gallery-02.jpg">
							<img class="img-fluid" src="public/home/images/gallery-02.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="public/home/images/gallery-03.jpg">
							<img class="img-fluid" src="public/home/images/gallery-03.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="public/home/images/gallery-04.jpg">
							<img class="img-fluid" src="public/home/images/gallery-04.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="public/home/images/gallery-05.jpg">
							<img class="img-fluid" src="public/home/images/gallery-05.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="public/home/images/gallery-06.jpg">
							<img class="img-fluid" src="public/home/images/gallery-06.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="public/home/images/gallery-07.jpg">
							<img class="img-fluid" src="public/home/images/gallery-07.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="public/home/images/gallery-08.jpg">
							<img class="img-fluid" src="public/home/images/gallery-08.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact wth us</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form method="POST" action="<?= base_url('sent_mail') ?>">
							<div id="contactForm">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name"
												placeholder="Your Name" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Your Email" id="email" class="form-control"
												name="email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" id="message" name="message"
												placeholder="Your Message" rows="8" data-error="Write your message"
												required></textarea>
											<div class="help-block with-errors"></div>
										</div>
										<div class="submit-button text-center">
											<input class="btn btn-common" id="submit" type="submit" value="Submit">
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->

	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">The Holy Matrimony
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- ALL JS FILES -->
	<script src="public/home/js/jquery.min.js"></script>
	<script src="public/home/js/popper.min.js"></script>
	<script src="public/home/js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
	<script src="public/home/js/jquery.magnific-popup.min.js"></script>
	<script src="public/home/js/jquery.pogo-slider.min.js"></script>
	<script src="public/home/js/slider-index.js"></script>
	<script src="public/home/js/smoothscroll.js"></script>
	<script src="public/home/js/form-validator.min.js"></script>
	<script src="public/home/js/contact-form-script.js"></script>
	<script src="public/home/js/custom.js"></script>
	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/74ab53f45b.js" crossorigin="anonymous"></script>
</body>

</html>