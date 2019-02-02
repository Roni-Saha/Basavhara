@extends('frontend.layouts.default')
@section('content')

<!DOCTYPE html> 
<html>
<head>
	<title></title>
<style>
.main{
  height: 1200px;
  margin-top: 60px;
  }
.shape1{
  float: left;
  position: relative;
  width: 1330px;
  height:900px;
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
<body style="height: 1000px; background-color: #07122c">
<div class="main">
    <div class="featured"> 
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3 style="color: white">featured of {{ $value->flatname }}</h3>
						<span class="section_subtitle">See our best offers</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div  class="shape1">
		
		<div class="shape2">
            <div class="shape3" >
                <h3>House Image:</h3>
@foreach(json_decode($value->image, true) as $image)

    
        <img src="{{ URL::to('images/'.$image)}}"
              alt="--" width="250" height="250" border="10px">
        
@endforeach
			        

		    </div>
        </div>

	    <div class="shape4">

		    <ul style="list-style-type:none">
			    <div class="shape5">
                    <li>Flot size:{{ $value->location }}</li>
				    <br><hr style="color: white">
				    <li>Location:{{ $value->location }}</li>
				    <br><hr>
				    <li>Price:{{ $value->location }}</li>
				    <br><hr>				
			        <li>Postdate:</li>
                    <br><hr>
                    <li>SecurityDeposite:{{ $value->location }}</li>
                    <br><hr>
                    <h3>Owner information:{{ $value->location }}</h3>
                    <br>
                    <li>Owner Name:{{ $value->location }}</li>
                    <br><hr>
                    <li>Mobile No:{{ $value->location }}</li>
                    <br><hr>
                    <li>Email:{{ $value->location }}</li>
                    <br><hr>
                    <li>Owner Address:{{ $value->location }}</li>
                </div>
		    </ul>

	    </div>
			
	</div>

</div>	
</body>
</html>
@stop