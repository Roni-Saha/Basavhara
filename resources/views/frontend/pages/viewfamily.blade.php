
	@extends('frontend.layouts.default')
@section('content')

<br><br><br>

<body style="background-color: #07122c">

<div class="featured">
	<div class="container">
		 
           	<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3 style="color: white">Family House</h3>
						<span class="section_subtitle">See our best offers</span>
					</div>
				</div>
			</div>

        <div   class="row featured_row">
        	  @foreach($viewfamily as $value)
            <div  class="col-lg-4 featured_card_col">
                    
					<div  id="{{ $value->id }}" class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Family House in {{ $value->location }} </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number">{{ $value->bedroom }}</span>
										</div>
									</div>


									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="image/area.png" alt=""></div>
											<span class="room_number">{{ $value->size }}</span>
										</div>
									</div>
                                     <br><br>
									<div class="room">
										<span class="room_title">Balcony</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">{{ $value->balcony }}</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number">{{ $value->attachroom }}</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#"><b>Details</b></a></span>
									<span class="room_tag"><a href="#"><b>Galary</b></a></span>
									
								</div>

							</div>
						</div>

						<div class="featured_card_box d-flex flex-row align-items-center trans_300">
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title"><b>For Rent</b></div>
								<div class="featured_card_price">{{ $value->rent }}</div>
							</div>
						</div>

					</div>
                      
				</div>
				@endforeach
			</div>
			
		</div>
	</div>


				
				
              </body>

				@stop