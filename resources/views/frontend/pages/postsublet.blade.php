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
  height:450px;
  margin-top: -900px;
  margin-left: 400px;
 
}

.flatinfo{
  margin-left: 150px;
  margin-top: 10px;
}


.flatinfo1{
margin-left: 10px;
margin-top: 50px;
}

.subbutton{
  margin-top: 55px;
  margin-left: 10px;
}

.main{
  height: 550px;
  width: 1333px;
  margin-top: 1100px;
}


</style>

</head>
<body style="height: 500px; background-color:#07122c ">
<div class="main">

   

   
    <div class="form">

<form action="sublet.php" method="post" >
<div class="flatinfo">

<div class="flatinfo1">
<h3>Sublet:</h3>

Image:
<br>
<input type="file" name="flatimage"> <br>
<br>
</div>
<div class="subbutton">
<input type="submit">
</div>
</div>
</form>
</div>
</div>
</body>
</html>
@stop