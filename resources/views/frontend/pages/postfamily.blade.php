   
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
  margin-top: -540px;
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
  <!--   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
  <div class="form">

<form action="{{URL::to('/familypost')}}" method="post"  enctype="multipart/form-data" >
	{{csrf_field()}}
  <h2 style="  margin-left: 60px" >Family House Information:</h2>
  <br><br>
<div class="flatinfo">
  
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
 {!! $errors->first('flatimage[]', '<p class="red">:message</p>') !!}
<br>
Rent:
<br>
<input type="number" name="rent"> <br>
<span style="color: red;" >{{$errors->first('rent')}} </span>
<br>

BedRoom:
<br>
<input type="number" name="bedroom"> <br>
<span style="color: red;" >{{$errors->first('bedroom')}} </span>
<br>


DrawingRoom:
<br>
<input type="number" name="drawingroom"> <br>
<span style="color: red;" >{{$errors->first('drawingroom')}} </span>
<br>
DiningRoom:
<br>
<input type="number" name="diningroom"> <br>
<span style="color: red;" >{{$errors->first('diningroom')}} </span>
<br><div class="flatinfo2"> 

StoreRoom:
<br>
<input type="number" name="storeroom"> <br>
<span style="color: red;" >{{$errors->first('storeroom')}} </span>
<br>
Kitchen:
<br>
<input type="number" name="kitchen"> <br>
<span style="color: red;" >{{$errors->first('kitchen')}} </span>
<br>
Balcony:
<br> 
<input type="number" name="balcony"><br>
<span style="color: red;" >{{$errors->first('balcony')}} </span>
 <br>
AttachBathRoom:
<br>
<input type="number" name="attachbathroom"> <br>
<span style="color: red;" >{{$errors->first('attachbathroom')}} </span>
<br>
CommonbathRoom:
<br>
<input type="number" name="commonbathroom"> <br>
<span style="color: red;" >{{$errors->first('commonbathroom')}} </span>
<br>
 FloorLevel:
 <br>
 <input type="number" name="floorlevel"><br>
<span style="color: red;" >{{$errors->first('floorlevel')}} </span>
 <br>
SecurityDeposit:
<br>
<input type="number" name="securitydeposite"><br>
<span style="color: red;" >{{$errors->first('securitydeposite')}} </span>
 <br>
<br> <br>
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