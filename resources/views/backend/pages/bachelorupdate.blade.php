@extends('backend.layouts.defaults')
@section('content')

<br><br>

    <div style="margin-left: 700px" class="form">

<form action="{{ URL::to('updatebachelor/'.$value->id) }}" method="post" enctype="multipart/form-data"  >
  {{csrf_field()}}
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >Bachelor House Information:</h2>
Flat name:
<br>
<input type="text" value="{{$value->flatname}}" name="flatname"> <br>
<span style="color: red;" >{{$errors->first('flatname')}} </span>
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
<input type="file" value="{{$value->image}}" name="flatimage[]" multiple> <br>

<br>
Rent:
<br>
<input type="number" value="{{$value->rent}}" name="rent"> <br>
<span style="color: red;" >{{$errors->first('rent')}} </span>
<br>
BedRoom:
<br> 
<input type=" number" value="{{$value->bedroom}}" name="bedroom">
<br>
<span style="color: red;" >{{$errors->first('bedroom')}} </span>
 <br> 
DrawingRoom:
<br> 
<input type=" number" value="{{$value->drawingroom}}" name="drawingroom">
<br>
<span style="color: red;" >{{$errors->first('drawingroom')}} </span>
 <br> 
<div class="flatinfo2">
  Diningroom:
  <br>
  <input type="number" value="{{$value->diningroom}}" name="diningroom">
  <br>
  <span style="color: red;" >{{$errors->first('diningroom')}} </span>
  <br>
KItchenRoom:
<br> 
<input type=" number" value="{{$value->kitchen}}" name="kitchen">
<br>
<span style="color: red;" >{{$errors->first('kitchen')}} </span>
 <br> 
AttachBathRoom:
<br> 
<input type=" number" value="{{$value->attacbathhroom}}" name="attacbathhroom">
<br>
<span style="color: red;" >{{$errors->first('attacbathhroom')}} </span>
 <br> 
CommonBathRoom:
<br> 
<input type=" number" value="{{$value->commonbathroom}}" name="commonbathroom">
<br>
<span style="color: red;" >{{$errors->first('commonbathroom')}} </span>
 <br> 
Foorlevel:
<br> 
<input type=" number" value="{{$value->floorlevel}}" name="floorlevel">
<br>
<span style="color: red;" >{{$errors->first('floorlevel')}} </span>
 <br> 
SecurityDeposit:
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
</div>

<div class="subbutton">
<input type="submit">
</div>
</form>
</div>
@stop 