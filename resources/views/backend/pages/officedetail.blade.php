@extends('backend.layouts.defaults')
@section('content')

	<div  style="margin-left: 300px;" class="shape1">
		
		<div class="shape2">
            <div class="shape3" >
                <h3>Office Image:</h3>
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
			    	<li>Flatname:{{ $value->flatname }}</li>
				    <hr color="white">
		            <li>Location:{{ $value->location }}</li>
		            <hr color="white">
                    <li>Size:{{ $value->size }}</li>
                    <hr color="white">
                    <li>Rent:{{ $value-> rent}}</li>
                    <hr color="white">
                    <li>Tottalroom:{{ $value->tottalroom }}</li>
                    <hr color="white">
                    <li>Bathroom:{{ $value->bathroom }}</li>
                    <hr color="white">
                    <li>FloorLevel:{{ $value->floorlevel }}</li>
                    <hr color="white">
                    <li>SecurityDeposit:{{ $value->securitydeposite }}</li>
                    <hr color="white">
                    <h3>Owner information:</h3>
                    <br>
                    <li>Owner Name:{{ $value->ownername }}</li>
                    <hr color="white">
                    <li>Mobile No:{{ $value->mobileno }}</li>
                    <hr color="white">
                    <li>Email:{{ $value->email }}</li>
                    <hr color="white">
                    <li>Owner Address:{{ $value->owneraddress }}</li>
                </div>
		    </ul>

	    </div>
			
	</div>
@stop