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
  height:650px;
  margin-top: -900px;
  margin-left: 400px;
 
}

.workerinfo{
  margin-left: 150px;
  margin-top: 10px;
}


.workerinfo1{
margin-left: 10px;
margin-top: 50px;
}

.subbutton{
  margin-top: -155px;
  margin-left: 580px;
}

.main{
  height: 750px;
  width: 1333px;
  margin-top: 1100px;
}

	</style>
</head>
<body style="height: 500px; background-color:#07122c ">

<div class="main">
    

   
    <div class="form">

<form action="servicepost" method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
<div class="workerinfo">

<div class="workerinfo1">
<h3>Worker information:</h3>
worker Name:
<br>
<input type="text" name="ownername"> <br>
<span style="color: red;" >{{$errors->first('ownername')}} </span>
<br>
Catagory:
<br>
<input type="text" name="catagory">
<br>
<span style="color: red;" >{{$errors->first('catagory')}} </span>
 <br>
MobileNo:
<br>
<input type="number" name="mobileno"> <br>
<span style="color: red;" >{{$errors->first('mobileno')}} </span>
<br>

Worker Address:
<br>
<input type="text" name="owneraddress"> <br>
<span style="color: red;" >{{$errors->first('owneraddress')}} </span>
<br>
NID No:
<br>
<input type="number" name="nidno"> <br>
<span style="color: red;" >{{$errors->first('nidno')}} </span>
<br>
Workerimage:
<br>
<input type="file" name="image[]" multiple> <br>


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