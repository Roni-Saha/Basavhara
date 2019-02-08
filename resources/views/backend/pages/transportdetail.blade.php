@extends('backend.layouts.defaults')
@section('content')

	<div  style="margin-left: 300px;" class="shape1">
		
		<div class="shape2">
            <div class="shape3" >
                <h3>Image:</h3>
@foreach(json_decode($value->image, true) as $image)

    
        <img src="{{ URL::to('images/'.$image)}}"
              alt="--" width="250" height="250" border="10px">
        
@endforeach
			   <br><br>     

		    </div>
        </div>

	    <div class="shape4">

		    <ul style="list-style-type:none">
			    <div class="shape5">
			    	
		            <li>Catagory:{{ $value->catagory }}</li>
		            <hr color="white">
                    <li>Address:{{ $value->location }}</li>
                    <hr color="white">
                    <li>Worker name:{{ $value->ownername }}</li>
				    <hr color="white">
                    <li>Mobileno:{{ $value-> mobileno}}</li>
                    <hr color="white">
                    <li>Email:{{ $value->email }}</li>
                   
                   
                </div>
		    </ul>

	    </div>
			
	</div>
@stop