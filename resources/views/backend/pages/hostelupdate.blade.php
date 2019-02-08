@extends('backend.layouts.defaults')
@section('content')


   
    <div style="margin-left: 700px" class="form">

<form action="{{ URL::to('updatehostel/'.$value->id) }}" method="post" enctype="multipart/form-data"  >
	{{csrf_field()}}
<div class="flatinfo">
	<br><br>
  <h2  >Hostel Information:</h2>
Hostel name:
<br>
<input type="text" value="{{$value->hostelname}}" name="hostelname"> <br>
<span style="color: red;" >{{$errors->first('hostelname')}} </span>
<br>
Location:
<br>
<input type="text" value="{{$value->location}}" name="location"> <br>
<span style="color: red;" >{{$errors->first('location')}} </span>
<br>
Size:
<br>
<input type="text" value="{{$value->size}}" name="size"> <br>
<span style="color: red;" >{{$errors->first('size')}} </span>
<br>
Image:
<br>
@foreach(json_decode($value->image, true) as $image)

    
        <img src="{{ URL::to('images/'.$image)}}"
              alt="--" width="250" height="250" border="10px">
        
@endforeach
<br>
<input type="file" value="{{$value->image}}" name="hostelimage[]" multiple> <br>

<br>
Rent:
<br>
<input type="number" value="{{$value->rent}}" name="rent"> <br>
<span style="color: red;" >{{$errors->first('rent')}} </span>
<br>

Common Room:
<br>
<input type="number" value="{{$value->commonroom}}" name="commonroom"> <br>
<span style="color: red;" >{{$errors->first('commonroom')}} </span>
<br>

Central KitchenRoom:
<br>
<input type="number" value="{{$value->kitchen}}" name="kitchenroom"> <br>
<span style="color: red;" >{{$errors->first('kitchenroom')}} </span>
<br>

Central Dinning Room:
<br>
<input type="number" value="{{$value->diningroom}}" name="diningroom">
<br>
<span style="color: red;" >{{$errors->first('diningroom')}} </span> 
 <br>



Available seat:
<br>
<input type="number" value="{{$value->availableseat}}" name="availableseat">
<br>
<span style="color: red;" >{{$errors->first('availableseat')}} </span>
<br>
Per room sit:
<br>
<input type="number" value="{{$value->perroomseat}}" name="perroomseat">
<br>
<span style="color: red;" >{{$errors->first('perroomseat')}} </span>
<br>

Attach BathRoom:
<br>
<input type="number" value="{{$value->attacbathhroom}}" name="attacbathhroom"> <br>
<span style="color: red;" >{{$errors->first('attacbathhroom')}} </span>
<br>
Common bathRoom:
<br>
<input type="number" value="{{$value->commonbathroom}}" name="commonbathroom"> <br>
<span style="color: red;" >{{$errors->first('commonbathroom')}} </span>
<br>
Floor level:
<br>
<input type="number" value="{{$value->floorlevel}}" name="floorlevel"> <br>
<span style="color: red;" >{{$errors->first('floorlevel')}} </span>
<br>
Security Deposit:
<br>
<input type="number" value="{{$value->securitydeposite}}" name="securitydeposite">
<br>
<span style="color: red;" >{{$errors->first('securitydeposite')}} </span>
 <br> 

<div class="ownerinfo">
<h3>Owner information:</h3>
Owner name:
<br>
<input type="text" value="{{$value->ownername}}" name="ownername"> <br>
<span style="color: red;" >{{$errors->first('ownername')}} </span>
<br>
MobileNo:
<br>
<input type="number" value="{{$value->mobileno}}" name="mobileno"> <br>
<span style="color: red;" >{{$errors->first('mobileno')}} </span>
<br>
Email:
<br>

<input type="email" value="{{$value->email}}" name="email"> <br>
<span style="color: red;" >{{$errors->first('email')}} </span>
<br>
Owner Address:
<br>
<input type="text" value="{{$value->owneraddress}}" name="owneraddress"> <br>
<span style="color: red;" >{{$errors->first('owneraddress')}} </span>
<br>
</div>

</div>

<div class="subbutton">
<input type="submit">
</div>
</form>
</div>
@stop 