@extends('backend.layouts.defaults')
@section('content')

<br><br>

    <div style="margin-left: 700px" class="form">

<form action="{{ URL::to('updateoffice/'.$value->id) }}"  enctype="multipart/form-data">
  {{csrf_field()}}
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >office Space Information:</h2>
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
<span style="color: red;" >{{$errors->first('image')}} </span>
<br>
Rent:
<br>
<input type="number" value="{{$value->rent}}" name="rent"> <br>
<span style="color: red;" >{{$errors->first('rent')}} </span>
<br>
TotalRoom:
<br>
<input type="number" value="{{$value->tottalroom}}" name="tottalroom"> <br>
<span style="color: red;" >{{$errors->first('tottalroom')}} </span>
<br>

BathRoom:
<br>
<input type="number" value="{{$value->bathroom}}" name="bathroom"> <br>
<span style="color: red;" >{{$errors->first('bathroom')}} </span>
<br>
FloorLevel:
<br>
<input type="number" value="{{$value->floorlevel}}" name="floorlevel">
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

<input type="text" value="{{$value->email}}" name="email"> <br>
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
<br>
@stop 