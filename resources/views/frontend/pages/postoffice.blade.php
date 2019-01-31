 
	@extends('frontend.layouts.default')
@section('content')


<html>
<head>
<title>
office post Page 
</title>

<style>

.form{
  
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

<form action="office.php" method="post"  enctype="multipart/form-data">
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >office Space Information:</h2>
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
<input type="file" name="flatimage"> <br>
<br>
Rent:
<br>
<input type="number" name="rent"> <br>
<br>
TotalRoom:
<br>
<input type="number" name="Totalroom"> <br>
<br>

BathRoom:
<br>
<input type="number" name="commonbathroom"> <br>
<br>
FloorLevel:
<br>
<input type="number" name="floorlevel">
<br><br>
SecurityDeposit:
<br>
<input type="number" name="SecurityDeposit">
<br><br>
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

<input type="text" name="email"> <br>
<br>
Owner Address:
<br>
<input type="text" name="owneraddress"> <br>
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