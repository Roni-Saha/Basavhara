@extends('frontend.layouts.default')
@section('content')


<div class="super_container">
	
	<!-- Home -->
	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" >
						<img style="width:100%;
     min-height:700px;" class="img-responsive img-circle center-block" src="{{asset('image/family.jpg')}}" alt="">
					</div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<a href=""> <h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Family House</h1></a>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" >
						<img style="width:100%;
     min-height:700px;" class="img-responsive img-circle center-block" src="{{asset('image/officeii.jpg')}}" alt="">
					</div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<a href=""><h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Office Space</h1></a>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" >
						<img style="width:100%;
     min-height:700px;" class="img-responsive img-circle center-block" src="{{asset('image/bech.jpg')}}" alt="">
					</div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<a href=""><h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Bachelor House</h1></a>
						</div>
					</div>
				</div>
			


				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background">
						<img style="width:100%;
     min-height:700px;"  class="img-responsive img-circle center-block" src="{{asset('image/bech.jpg')}}" alt="">
					</div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<a href=""><h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Workers</h1></a>
						</div>
					</div>
				</div>
			

				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" >
						<img style="width:100%;
     min-height:700px;" class="img-responsive img-circle center-block" src="{{asset('image/bech.jpg')}}" alt="">
					</div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<a href=""><h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Hostel</h1></a>
						</div>
					</div>
				</div>


                 
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" >
						<img style="width:100%;
     min-height:700px;" class="img-responsive img-circle center-block" src="{{asset('image/vehiclei.jpg')}}" alt="">
					</div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<a href=""><h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Transport</h1></a>
						</div>
					</div>
				</div>

				</div>
				</div>
			</div>
			
			<!-- Home Slider Nav -->
			<div class="home_slider_nav_left home_slider_nav d-flex flex-row align-items-center justify-content-end">
				<img style="width:100%;
     min-height:600px;" src="images/nav_left.png" alt="">
			</div>

		</div>
<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>featured properties</h3>
						<span class="section_subtitle">See our best offers</span>
					</div>
				</div>
			</div>

			<div class="row featured_row">
				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							<img class="card-img-top" src="images/featured_1.jpg" alt="https://unsplash.com/@breather">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">House in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">For Sale</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							<img class="card-img-top" src="images/featured_2.jpg" alt="https://unsplash.com/@astute">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">House in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">For Sale</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

				<div class="col-lg-4 featured_card_col">

					<div class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							<img class="card-img-top" src="images/featured_3.jpg" alt="https://unsplash.com/@marcusneto">
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">House in West California</a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Patio</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">1</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Garage</span>
										<div class="room_content">
											<div class="room_image"><img src="images/garage.png" alt=""></div>
											<span class="room_number">2</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							<img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">For Sale</div>
								<div class="featured_card_price">$540,000</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>clients testimonials</h3>
						<span class="section_subtitle">See our best offers</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/person.jpg" alt="https://unsplash.com/@remdesigns">
										</div>
										<div class="testimonial_name">natalie smith</div>
										<div class="testimonial_title">Client in California</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/person.jpg" alt="https://unsplash.com/@remdesigns">
										</div>
										<div class="testimonial_name">natalie smith</div>
										<div class="testimonial_title">Client in California</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/person.jpg" alt="https://unsplash.com/@remdesigns">
										</div>
										<div class="testimonial_name">natalie smith</div>
										<div class="testimonial_title">Client in California</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Workflow -->

	<div class="workflow">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>see how we operate</h3>
						<span class="section_subtitle">What you need to do</span>
					</div>
				</div>
			</div>

			<div class="row workflow_row">
				<div class="workflow_rocket"><img src="images/rocket.png" alt=""></div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>01.</span></div>
							</div>
							<div class="workflow_image">
								<img src="images/workflow_1.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Choose a Location</div>
							<p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
						</div>
					</div>
				</div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>02.</span></div>
							</div>
							<div class="workflow_image">
								<img src="images/workflow_2.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Find the Perfect Home</div>
							<p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
						</div>
					</div>
				</div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>03.</span></div>
							</div>
							<div class="workflow_image">
								<img src="images/workflow_3.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Move in your new life</div>
							<p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Cities -->

	<div class="cities">
		<div class="cities_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>cities clients prefer</h3>
						<span class="section_subtitle">What you need to do</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">

					<!-- Cities Slider -->
		
					<div class="cities_slider_container">
						<div class="owl-carousel owl-theme cities_slider">
							
							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_1.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>miami</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_2.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>dublin</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_3.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>vienna</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_4.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>marbella</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_5.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>new york</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="#">
									<div class="city_image">
										<img src="images/city_6.jpg" alt="">
									</div>
									<div class="city_details"><img src="images/search.png" alt=""></div>
									<div class="city_name"><span>geneva</span></div>
								</a>
							</div>
							
						</div>
						
						<div class="cities_prev cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
							<img src="images/nav_left.png" alt="">
						</div>

						<div class="cities_next cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
							<img src="images/nav_right.png" alt="">
						</div>

					</div>

				</div>
					
			</div>

		</div>
	</div>

	<!-- Call to Action -->

	<div class="cta_1">
		<div class="cta_1_background" style="background-image:url(images/cta_1.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="cta_1_content d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<h3 class="cta_1_text text-lg-left text-center">Do you want to talk with one of our <span>real estate experts?</span></h3>
						<div class="cta_1_phone">Call now:   +0080 234 567 84441</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row row-equal-height">

				<div class="col-lg-6">
					<div class="newsletter_title">
						<h3>subscribe to our newsletter</h3>
						<span class="newsletter_subtitle">Get the latest offers</span>
					</div>
					<div class="newsletter_form_container">
						<form action="#">
							<div class="newsletter_form_content d-flex flex-row">
								<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Your email here" required="required" data-error="Valid email is required.">
								<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_200" value="Submit">subscribe</button>
							</div>
						</form>
					</div>
				</div>

				<div class="col-lg-6">
					<a href="#">
						<div class="weekly_offer">
							<div class="weekly_offer_content d-flex flex-row">
								<div class="weekly_offer_icon d-flex flex-column align-items-center justify-content-center">
									<img src="images/prize.svg" alt="">
								</div>
								<div class="weekly_offer_text text-center">weekly offer</div>
							</div>
							<div class="weekly_offer_image" style="background-image:url(images/weekly.jpg)"></div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>


	@stop 