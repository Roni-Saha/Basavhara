@extends('frontend.layouts.default')
@section('content')
<br><br><br>
<body style="background-color: #07122c">
<div class="featured"> 
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3 style="color: white">featured Hostel</h3>
						<span class="section_subtitle">See our best offers</span>
						<div class="phone_home text-center">
							<span>search</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row featured_row">
				 @foreach($viewhostel as $value)
				<div  class="col-lg-4 featured_card_col">

					<div id="{{ $value->id }}" class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">featured</div>
							<img src="{{ asset($value->image )}}"/>


							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Hostel in {{ $value->location }} </a></div>
								<div class="card-text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Availabail seat</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number"> {{ $value->availabailseat }} </span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number">{{ $value->attachbathroom }}</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">{{ $value->size }}</span>
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
							
							<div class="featured_card_box_content">
								<div class="featured_card_price_title">For Sale</div>
								<div class="featured_card_price">$540,000</div>
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