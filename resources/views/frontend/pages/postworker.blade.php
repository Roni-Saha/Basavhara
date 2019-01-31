	@extends('frontend.layouts.default')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		.form{

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

<form action="service.php" method="post"  enctype="multipart/form-data">
<div class="workerinfo">

<div class="workerinfo1">
<h3>Worker information:</h3>
worker Name:
<br>
<input type="text" name="ownername"> <br>
<br>
Catagory:
<br>
<input type="text" name="catagory">
<br> <br>
MobileNo:
<br>
<input type="number" name="mobileno"> <br>
<br>

Worker Address:
<br>
<input type="text" name="owneraddress"> <br>
<br>
NID No:
<br>
<input type="number" name="nidno"> <br>
<br>
Image:
<br>
<input type="file" name="workerimage"> <br>

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