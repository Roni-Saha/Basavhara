	@extends('frontend.layouts.default')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
	.form{
  color: white;
  width: 600px;
  height:950px;
  margin-top: -800px;
  margin-left: 400px;
 
}


.flatinfo{
  margin-left: 80px;
  margin-top: 0px;
}

.flatinfo2{
  margin-left:250px;
  margin-top: -555px;
}

.ownerinfo{
margin-left: -105px;
margin-top: 70px;
}

.subbutton{
  margin-top: 20px;
  margin-left: 280px;
}

.main{
  
  height: 1200px;
  margin-top: 1000px;
  
}

</style>

</head>


<body style="height: 1200px; background-color:#07122c ">




 <div class="main">
    

   
    <div class="form">

<form action="{{URL::to('/hostelpost')}}" method="post" enctype="multipart/form-data"  >
	{{csrf_field()}}
<div class="flatinfo">
  <h2 style=" margin-left: 50px" >Hostel Information:</h2>
Hostel name:
<br>
<input type="text" name="hostelname"> <br>
<span style="color: red;" >{{$errors->first('hostelname')}} </span>
<br>
Location:
<br>
<input type="text" name="location"> <br>
<span style="color: red;" >{{$errors->first('location')}} </span>
<br>
Size:
<br>
<input type="text" name="size"> <br>
<span style="color: red;" >{{$errors->first('size')}} </span>
<br>
Image:
<br>
<input type="file" name="hostelimage[]" multiple> <br>

<br>
Rent:
<br>
<input type="number" name="rent"> <br>
<span style="color: red;" >{{$errors->first('rent')}} </span>
<br>

Common Room:
<br>
<input type="number" name="commonroom"> <br>
<span style="color: red;" >{{$errors->first('commonroom')}} </span>
<br>

Central KitchenRoom:
<br>
<input type="number" name="kitchenroom"> <br>
<span style="color: red;" >{{$errors->first('kitchenroom')}} </span>
<br><br><br><br><br>
<div class="flatinfo2">

Central Dinning Room:
<br>
<input type="number" name="diningroom">
<br>
<span style="color: red;" >{{$errors->first('diningroom')}} </span> 
 <br>



Available seat:
<br>
<input type="number" name="availableseat">
<br>
<span style="color: red;" >{{$errors->first('availableseat')}} </span>
<br>
Per room sit:
<br>
<input type="number" name="perroomseat">
<br>
<span style="color: red;" >{{$errors->first('perroomseat')}} </span>
<br>

Attach BathRoom:
<br>
<input type="number" name="attachbathroom"> <br>
<span style="color: red;" >{{$errors->first('attachbathroom')}} </span>
<br>
Common bathRoom:
<br>
<input type="number" name="commonbathroom"> <br>
<span style="color: red;" >{{$errors->first('commonbathroom')}} </span>
<br>
Floor level:
<br>
<input type="number" name="floorlevel"> <br>
<span style="color: red;" >{{$errors->first('floorlevel')}} </span>
<br>
Security Deposit:
<br>
<input type="number" name="securitydeposite">
<br>
<span style="color: red;" >{{$errors->first('securitydeposite')}} </span>
 <br> 

<div class="ownerinfo">
<h3>Owner information:</h3>
Owner name:
<br>
<input type="text" name="ownername"> <br>
<span style="color: red;" >{{$errors->first('ownername')}} </span>
<br>
MobileNo:
<br>
<input type="number" name="mobileno"> <br>
<span style="color: red;" >{{$errors->first('mobileno')}} </span>
<br>
Email:
<br>

<input type="email" name="email"> <br>
<span style="color: red;" >{{$errors->first('email')}} </span>
<br>
Owner Address:
<br>
<input type="text" name="owneraddress"> <br>
<span style="color: red;" >{{$errors->first('owneraddress')}} </span>
<br>
</div>
</div>
</div>

<div class="subbutton">
<input type="submit">
</div>
</form>
</div>
</div>

</body>
</html>

</body>
</html>
@stop