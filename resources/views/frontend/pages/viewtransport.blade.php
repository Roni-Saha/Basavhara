
	@extends('frontend.layouts.default')
@section('content')


<br><br><br>

<body  style="background-color: #07122c;">

<div id="demo" class="featured" >
	<div class="container">
		 
           	<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3 style="color: white">Transport</h3>
						<span class="section_subtitle">See our best offers</span>
						<!-- search -->
						<div style="margin-left: 380px" class="col-md-4">
	                        <form action="/searchtransport" method="get">
		                        <div class="input-group">
			                        <input style="margin-left: 0px" type="search" name="search" placeholder="search by location" class= "form-control">
			                          
			
		                         </div>
		
	                        </form>
	
                        </div>

					</div>
				</div>
			</div>

        <div   class="row featured_row" >
        	  @foreach($viewtransport as $value)
            <div  style="margin-top:20px " class="col-lg-4 featured_card_col">
                    
					<div  id="{{ $value->id }}" class="featured_card_container">
						<div class="card featured_card trans_300">
							<div class="featured_panel">
								<span class="room_tag"><b>Image</b></span>

								</div>
							<img src="{{asset('images/'.json_decode($value->image, true)[0])}}" width="350" height="250">
                           
							
                          
							<div class="card-body">
								<div class="card-title"><a href="listings_single.html">Transport at {{ $value->location }} </a></div>
								
								<div class="rooms">

									<div class="room">
										<span class="room_title" style="font-size: 15px"><b>Catagory:</b>{{ $value->catagory }}</span>
										
									</div>


									<div  class="room">
										<span class="room_title" style="font-size: 15px"><b> Owner Name :</b>{{ $value->ownername }}</span>
										
									</div>
                                  
									<div class="room">
										<span class="room_title" style="font-size: 15px"><b>Mobile No:</b>{{ $value->mobileno }}</span>
										
									</div>

									<div class="room">
										<span class="room_title" style="font-size: 15px"><b>Email:</b>{{ $value->email }}</span>
										
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
            <div style="margin-left: 480px; color: white">{{$viewtransport->links()}}</div>
			
		</div>
	</div>


	


  </body>
<br><br><br><br><br>
				@stop