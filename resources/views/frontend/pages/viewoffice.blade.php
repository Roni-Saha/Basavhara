
	@extends('frontend.layouts.default')
@section('content')



<br><br><br>

<body  style="background-color: #07122c;">

<div id="demo" class="featured" >
	<div class="container">
		 
           	<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3 style="color: white">Office Space</h3>
						<span class="section_subtitle">See our best offers</span>
						<!-- search -->
						<div style="margin-left: 380px" class="col-md-4">
	                        <form action="/searchoffice" method="get">
		                        <div class="input-group">
			                        <input style="margin-left: 0px" type="search" name="search" placeholder="search" class= "form-control">
			                          
			
		                         </div>
		
	                        </form>
	
                        </div>

					</div>
				</div>
			</div>

        <div   class="row featured_row" >
        	  @foreach($viewoffice as $value)
            <div  style="margin-top:20px " class="col-lg-4 featured_card_col">
                    
					<div  id="{{ $value->id }}" class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">
								<span class="room_tag"><b>{{ $value->flatname }}</b></span>

								</div>
							<img src="{{asset('images/'.json_decode($value->image, true)[0])}}" width="350" height="250">
                           
							
                          
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Office Space in {{ $value->location }} </a></div>
								<div class="card-text"><!-- Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor. --></div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Tottalroom</span>
										<div class="room_content">
											<div class="room_image"><img src="image/bedroom.png" alt=""></div>
											<span class="room_number">{{ $value->tottalroom }}</span>
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
										<span class="room_title">Bathroom</span>
										<div class="room_content">
											<div class="room_image"><img src="images/patio.png" alt=""></div>
											<span class="room_number">{{ $value->bathroom }}</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Floor Level</span>
										<div class="room_content">
											<div class="room_image"><img src="image/shower.png" alt=""></div>
											<span class="room_number">{{ $value->attachroom }}</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="detailoffice/{{ $value->id }}" ><b>Details</b></a></span>
									
									
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
				<br><br>
				@endforeach

			</div>
			<br><br><br>
			<!-- paging -->
            <div style="margin-left: 480px; color: white">{{$viewoffice->links()}}</div>
			
		</div>
	</div>


	


  </body>

<br><br><br><br><br>
				@stop