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
  margin-top: -470px;
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

<form action="bachelorpost" method="post" enctype="multipart/form-data"  >
  {{csrf_field()}}
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >Bachelor House Information:</h2>
Flat name:
<br>
<input type="text" name="flatname"> <br>
<span style="color: red;" >{{$errors->first('flatname')}} </span>
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
<input type="file" name="flatimage[]" multiple> <br>

<br>
Rent:
<br>
<input type="number" name="rent"> <br>
<span style="color: red;" >{{$errors->first('rent')}} </span>
<br>
BedRoom:
<br> 
<input type=" number" name="bedroom">
<br>
<span style="color: red;" >{{$errors->first('bedroom')}} </span>
 <br> 
DrawingRoom:
<br> 
<input type=" number" name="drawingroom">
<br>
<span style="color: red;" >{{$errors->first('drawingroom')}} </span>
 <br> 
<div class="flatinfo2">
  Diningroom:
  <br>
  <input type="number" name="diningroom">
  <br>
  <span style="color: red;" >{{$errors->first('diningroom')}} </span>
  <br>
KItchenRoom:
<br> 
<input type=" number" name="kitchen">
<br>
<span style="color: red;" >{{$errors->first('kitchen')}} </span>
 <br> 
AttachBathRoom:
<br> 
<input type=" number" name="attacbathhroom">
<br>
<span style="color: red;" >{{$errors->first('attacbathhroom')}} </span>
 <br> 
CommonBathRoom:
<br> 
<input type=" number" name="commonbathroom">
<br>
<span style="color: red;" >{{$errors->first('commonbathroom')}} </span>
 <br> 
Foorlevel:
<br> 
<input type=" number" name="floorlevel">
<br>
<span style="color: red;" >{{$errors->first('floorlevel')}} </span>
 <br> 
SecurityDeposit:
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

@stop