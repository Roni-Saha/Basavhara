@extends('backend.layouts.defaults')
@section('content')
<br><br>

    <div style="margin-left: 700px" class="form">

<form action="{{ URL::to('updatetransport/'.$value->id) }}"  enctype="multipart/form-data">
  {{csrf_field()}}
<div class="flatinfo">
  <h2 style=" margin-left: 0px" >Transfort Information:</h2>


Transport catagory:
<br>
<input type="text" value="{{$value->catagory}}" name="catagory"> <br>
<span style="color: red;" >{{$errors->first('catagory')}} </span>
<br>
Location:
<br>
<input type="text" value="{{$value->location}}" name="location"> <br>
<span style="color: red;" >{{$errors->first('location')}} </span>
<br>
Image:
<br>
@foreach(json_decode($value->image, true) as $image)

    
        <img src="{{ URL::to('images/'.$image)}}"
              alt="--" width="250" height="250" border="10px">
        
@endforeach
<br>
<input type="file" value="{{$value->image}}" name="image[]" multiple> <br>
<br>

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


</div>


<div class="subbutton">
<input type="submit">
</div>
</div>
</form>
</div>
@stop 