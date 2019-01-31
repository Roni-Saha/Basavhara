@extends('frontend.layouts.default')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	.form{
  
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

<form action="becholormess.php" method="post" enctype="multipart/form-data"  >
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >Becholor House Information:</h2>
Flat name:
<br>
<input type="text" name="flatname"> <br>
<br>
Location:
<br>
<input type="text" name="location"> <br>
<br>
Size:
<br>
<input type="text" name="size"> <br>
<br>
Image:
<br>
<input type="file" name="fltimage"> <br>
<br>
Rent:
<br>
<input type="number" name="rent"> <br>
<br>
LIvingRoom:
<br> 
<input type=" number" name="livingroom">
<br> <br> 
DrawingRoom:
<br> 
<input type=" number" name="drawingroom">
<br> <br> 
<div class="flatinfo2">
  Diningroom:
  <br>
  <input type="number" name="diningroom">
  <br><br>
KItchenRoom:
<br> 
<input type=" number" name="kitchenroom">
<br> <br> 
AttachBathRoom:
<br> 
<input type=" number" name="attachbathroom">
<br> <br> 
CommonBathRoom:
<br> 
<input type=" number" name="commonbathroom">
<br> <br> 
Balcony:
<br> 
<input type=" number" name="balcony">
<br> <br> 
SecurityDeposit:
<br>
<input type="number" name="SecurityDeposit">
<br> <br> 
Postdate:
<br> 
<input type="date" name="postdate">

<div class="ownerinfo">
<h3>Owner information:</h3>
Owner name:
<br>
<input type="text" name="ownername"> <br>
<br>
MobileNo:
<br>
<input type="number" name="mobileno"> <br>
<br>
Email:
<br>

<input type="email" name="email"> <br>
<br>
Owner Address:
<br>
<input type="text" name="owneraddress"> <br>
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