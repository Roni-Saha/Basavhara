 
	@extends('frontend.layouts.default')
@section('content')


<html>
<head>
<title>
office post Page 
</title>

<style>

.form{
  color: white;
  border-top:120px; 
  width: 600px;
  height:950px;
  margin-top: -1000px;
  margin-left: 400px;
 
}


.flatinfo{
  margin-left: 150px;
  margin-top: 10px;
}



.ownerinfo{
margin-left: 0px;
margin-top: 50px;
}

.subbutton{
  margin-top: 10px;
  margin-left: 200px;
}




.contact{
  margin-left: 50px;
  margin-top: 5px;
}
.main{
  
  height: 1200px;
  margin-top: 1000px;
  
}

</style>


</head>

<body style="height: 1200px; background-color:#07122c ">
	<br><br><br><br><br><br><br><br>
  <div class="main">
    

   
    <div class="form">

<form action="officepost" method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >office Space Information:</h2>
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
<span style="color: red;" >{{$errors->first('image')}} </span>
<br>
Rent:
<br>
<input type="number" name="rent"> <br>
<span style="color: red;" >{{$errors->first('rent')}} </span>
<br>
TotalRoom:
<br>
<input type="number" name="tottalroom"> <br>
<span style="color: red;" >{{$errors->first('tottalroom')}} </span>
<br>

BathRoom:
<br>
<input type="number" name="bathroom"> <br>
<span style="color: red;" >{{$errors->first('bathroom')}} </span>
<br>
FloorLevel:
<br>
<input type="number" name="floorlevel">
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

<input type="text" name="email"> <br>
<span style="color: red;" >{{$errors->first('email')}} </span>
<br>
Owner Address:
<br>
<input type="text" name="owneraddress"> <br>
<span style="color: red;" >{{$errors->first('owneraddress')}} </span>
<br>
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