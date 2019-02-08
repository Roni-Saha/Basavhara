@extends('frontend.layouts.default')
@section('content')

<!DOCTYPE html> 
<html>
<head>
	<title></title>
<style>
.main{
  height: 1500px;
  margin-top: 60px;
  }
.shape1{

  color: white;
  float: left;
  position: relative;
  width: 1330px;
  height:1100px;
  border-style: groove;
  border-width: 2.5px;
  border-color:Azure ;
}
.shape2{
  float: left;
  position: relative;
  margin-left: .0001%;
  margin-top: .0001%;
  width: 50%;
  height:99%;
  border-color:LightCyan;
}
.shape4{
  margin-left: 680px;
  margin-top: 20px;
}
.shape3{
  margin-left: 10px;
  margin-top: 100px;
}

</style>
</head>
<body style="height: 1200px; background-color: #07122c">
<div class="main">
    <div class="featured"> 
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3 style="color: white">featured of {{ $value->hostelname }}</h3>
						<span class="section_subtitle">See our house offers</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div  class="shape1">
		
		<div class="shape2">
            <div class="shape3" >
                <h3>House Image:</h3>
                <div class="testimonials_slider_container">

            
            <div class="owl-carousel owl-theme testimonials_slider">
@foreach(json_decode($value->image, true) as $image)

    
        <img src="{{ URL::to('images/'.$image)}}"
              alt="--" width="250" height="550" border="10px">
        
@endforeach
</div>
</div>
			        

		    </div>
        </div>

	    <div class="shape4">

		    <ul style="list-style-type:none">
			    <div class="shape5">
				            <li>Location:{{ $value->location }}</li>
				            <hr color="white">
                    <li>Size:{{ $value->size }}</li>
                    <hr color="white">
                    <li>Rent:{{ $value-> rent}}</li>
                    <hr color="white">
                    <li>Commonroom:{{ $value->commonroom }}</li>
                    <hr color="white">
                    <li>Availableroom:{{ $value->availableroom }}</li>
                    <hr color="white">
                    <li>Perroomset:{{ $value->perroomset }}</li>
                    <hr color="white">
                    <li>Diningroom:{{ $value-> diningroom}}</li>
                    <hr color="white">
                    <li>Kitchen:{{ $value->kitchen }}</li>
                    <hr color="white">
                    <li>Attachbathroom:{{ $value->attachbathroom }}</li>
                    <hr color="white">
                    <li>Commonbathroom:{{ $value->commonbathroom }}</li>
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

</div>	
</body>
</html>
@stop