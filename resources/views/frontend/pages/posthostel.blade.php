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
<input type="file" name="hostelimage[]" multiple> <br>
<br>
Rent:
<br>
<input type="number" name="rent"> <br>
<br>

Common Room:
<br>
<input type="number" name="commonroom"> <br>
<br>

Central KitchenRoom:
<br>
<input type="number" name="kitchenroom"> <br>
<br><br><br><br><br>
<div class="flatinfo2">

Central Dinning Room:
<br>
<input type="number" name="diningroom">
<br>  <br>



Available seat:
<br>
<input type="number" name="availableseat">
<br><br>
Per room sit:
<br>
<input type="number" name="perroomseat">
<br><br>

Attach BathRoom:
<br>
<input type="number" name="attachbathroom"> <br>
<br>
Common bathRoom:
<br>
<input type="number" name="commonbathroom"> <br>
<br>
Floor level:
<br>
<input type="number" name="floorlevel"> <br>
<br>
Security Deposit:
<br>
<input type="number" name="SecurityDeposit">
<br> <br> 

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

</body>
</html>
@stop