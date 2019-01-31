@extends('frontend.layouts.default')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	.form{

  width: 600px;
  height:850px;
  margin-top: -750px;
  margin-left: 400px;
 
}


.flatinfo{
  margin-left: 150px;
  margin-top: 10px;
}

.flatinfo2{
  margin-left:250px;
  margin-top: -400px;
}

.ownerinfo{
margin-left: 10px;
margin-top: 50px;
}

.subbutton{
  margin-top: -335px;
  margin-left: 580px;
}
.main{
  height: 950px;
  width: 1333px;
  margin-top: 950px;

}
</style>

</head>
<body style="height: 1000px; background-color:#07122c ">
 <div class="main">
  

   
    <div class="form">

<form action="vehicle.php" method="post"  enctype="multipart/form-data">
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >Transfort Information:</h2>


Catagory:
<br>
<input type="text" name="catagory"> <br>
<br>
Location:
<br>
<input type="text" name="location"> <br>
<br>
Image:
<br>
<input type="file" name="image"> <br>
<br>

Owner name:
<br>
<input type="text" name="transfortname"> <br>
<br>

MobileNo:
<br>
<input type="number" name="mobileno"> <br>
<br>
Email:
<br>

<input type="text" name="email"> <br>
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