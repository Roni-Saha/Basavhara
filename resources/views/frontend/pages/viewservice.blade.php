
	@extends('frontend.layouts.default')
@section('content')



<br><br><br>

<body  style="background-color: #07122c;">

<div id="demo" class="featured" >
	<div class="container">
		 
           	<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3 style="color: white">Services</h3>
						<span class="section_subtitle">See our best service</span>
						<!-- search -->
						<div style="margin-left: 380px" class="col-md-4">
	                        <form action="/searchservice" method="get">
		                        <div class="input-group">
			                        <input style="margin-left: 0px" type="search" name="search" placeholder="search by location" class= "form-control">
			                          
			
		                         </div>
		
	                        </form>
	
                        </div>

					</div>
				</div>
			</div>

        <div   class="row featured_row" >
        	  @foreach($viewservice as $value)
            <div  style="margin-top:20px " class="col-lg-4 featured_card_col">
                    
					<div  id="{{ $value->id }}" class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">
								<span class="room_tag"><b><!-- {{ $value->flatname }} --></b></span>

								</div>
							<img src="{{asset('images/'.json_decode($value->image, true)[0])}}" width="350" height="250">
                           
							
                          
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">{{ $value->catagory }} </a></div>
								<!-- <img src="{{asset('images/'.json_decode($value->image, true)[0])}}" width="350" height="250"> -->
								<div class="card-text"><!-- Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor. --></div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Worker Name</span><hr>
										<div class="room_content">
											
											<span class="room_number">{{ $value->ownername }}</span>
										</div>
									</div>


									<div class="room">
										<span class="room_title">Mobile Number</span><hr>
										<div class="room_content">
											
											<span class="room_number">{{ $value->mobileno }}</span>
										</div>
									</div>
                                     <br><br>
									<div class="room">
										<span class="room_title">Address</span><hr>
										<div class="room_content">
											
											<span class="room_number">{{ $value->owneraddress }}</span>
										</div>
									</div>

									<div style="margin-left: 20px" class="room">
										<span class="room_title">NID No</span><hr>
										<div class="room_content">
											
											<span class="room_number">{{ $value->nidno }}</span>
										</div>
									</div>

								</div>

							</div>
						</div>

						<div style="height: 25px" class="featured_card_box d-flex flex-row align-items-center trans_300">
							
						</div>

					</div>
                      
				</div>
				<br><br>
				@endforeach

			</div>
			<br><br><br>
			<!-- paging -->
            <div style="margin-left: 480px; color: white">{{$viewservice->links()}}</div>
			
		</div>
	</div>


	


  </body>

<br><br><br><br><br>
				@stop