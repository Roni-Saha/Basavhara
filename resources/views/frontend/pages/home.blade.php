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
							<a href="viewfamily"> <h1 style="color: #07122c" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Family House</h1></a>
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
							<a href=""><h1 style="color: #07122c" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Office Space</h1></a>
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
							<a href=""><h1 style="color: #07122c" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Bachelor House</h1></a>
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
							<a href=""><h1 style="color: #07122c" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Workers</h1></a>
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
							<a href=""><h1 style="color: #07122c" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Hostel</h1></a>
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
							<a href=""><h1 style="color: #07122c" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Transport</h1></a>
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

		

	<!-- Testimonials -->
    <div style="background-color: #07122c">
    	<br><br><br><br>

<div class="featured">
	<div class="container">
		 
           	<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<span style="color: white; font-size: 25px" class="section_subtitle">Search</span>
						<div class="phone_home text-center">

							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color: #07122c" class="testimonials">
		<div class="testimonials_background_container prlx_parent">
			<!-- <div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div> -->
			
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>Developer Company Propertise</h3>
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
							 	<div  style="width: 3000px; height: 600px;">
            <div  class="col-lg-4 featured_card_col">
                    
					<div  " class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Developer House in </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>


									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="image/area.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                     <br><br>
									<div class="room">
										<span class="room_title">Balcony</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="" ><b>Details</b></a></span>
									<span class="room_tag"><a href="#"><b>Galary</b></a></span>
									
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"><b>For Rent</b></div>
								<div class="featured_card_price"></div>
							</div>
						</div>

					</div>
                      
				</div>
				</div> 

							<!-- Testimonials Item -->
							 	<div  style="width: 3000px; height: 600px;">
            <div  class="col-lg-4 featured_card_col">
                    
					<div  " class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Family House in </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>


									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="image/area.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                     <br><br>
									<div class="room">
										<span class="room_title">Balcony</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="" ><b>Details</b></a></span>
									<span class="room_tag"><a href="#"><b>Galary</b></a></span>
									
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"><b>For Rent</b></div>
								<div class="featured_card_price"></div>
							</div>
						</div>

					</div>
                      
				</div>
				</div> 

							<!-- Testimonials Item -->
							
 	<div  style="width: 3000px; height: 600px;">
            <div  class="col-lg-4 featured_card_col">
                    
					<div  " class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Family House in </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>


									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="image/area.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                     <br><br>
									<div class="room">
										<span class="room_title">Balcony</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="" ><b>Details</b></a></span>
									<span class="room_tag"><a href="#"><b>Galary</b></a></span>
									
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"><b>For Rent</b></div>
								<div class="featured_card_price"></div>
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

	<br><br> <br><br>
	<div style="background-color: #07122c" class="testimonials">
				<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>Residential Propertise</h3>
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
							
        	<div  style="width: 3000px; height: 600px;">
            <div  class="col-lg-4 featured_card_col">
                    
					<div  " class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Residential House in </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">
									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="image/area.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                    <div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<div class="room">
										<span class="room_title">Drawingroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>               
									</div>
									<div class="room">
										<span class="room_title">Diningrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                    <div class="room">
										<span class="room_title">Storerooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                    <div class="room">
										<span class="room_title">Kitchen</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									
                                     
									<div class="room">
										<span class="room_title">Balcony</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Attach Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<br>
									<div class="room">
										<span class="room_title">common Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<div class="room">
										<span class="room_title">Floar Level</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<div class="room">
										<span class="room_title">Security Deposite</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<div class="room">
										<span class="room_title">Owner Name</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<div class="room">
										<span class="room_title">Mobile no</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<div class="room">
										<span class="room_title">Email</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
									<div class="room">
										<span class="room_title">Owner Address</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

								</div>

								<div class="room_tags">
								
									<span class="room_tag"><a href="#"><b>Galary</b></a></span>
									
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"><b>For Rent</b></div>
								<div class="featured_card_price"></div>
							</div>
						</div>

					</div>
                      
				</div>
				</div> 
			
		
							<!-- Testimonials Item -->
							<div  style="width: 3000px; height: 600px;">
							 <div  class="col-lg-4 featured_card_col">
                    
					<div  " class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Family House in </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>


									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="image/area.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                     <br><br>
									<div class="room">
										<span class="room_title">Balcony</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="" ><b>Details</b></a></span>
									<span class="room_tag"><a href="#"><b>Galary</b></a></span>
									
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"><b>For Rent</b></div>
								<div class="featured_card_price"></div>
							</div>
						</div>

					</div>
                      
				</div>
			</div>

							<!-- Testimonials Item -->
							<div  style="width: 3000px; height: 600px;">
						 <div  class="col-lg-4 featured_card_col">
                    
					<div  " class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Family House in </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>


									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="image/area.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>
                                     <br><br>
									<div class="room">
										<span class="room_title">Balcony</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number"></span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="" ><b>Details</b></a></span>
									<span class="room_tag"><a href="#"><b>Galary</b></a></span>
									
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"><b>For Rent</b></div>
								<div class="featured_card_price"></div>
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
	@stop 