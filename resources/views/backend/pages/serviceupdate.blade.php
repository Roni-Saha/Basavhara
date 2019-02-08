@extends('backend.layouts.defaults')
@section('content')

<br><br>

    <div style="margin-left: 700px" class="form">

<form action="{{ URL::to('updateservice/'.$value->id) }}" method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
<div class="workerinfo">

<div class="workerinfo1">
<h3>Worker information:</h3>
worker Name:
<br>
<input type="text" value="{{$value->ownername}}" name="ownername"> <br>
<span style="color: red;" >{{$errors->first('ownername')}} </span>
<br>
Catagory:
<br>
<input type="text" value="{{$value->catagory}}" name="catagory">
<br>
<span style="color: red;" >{{$errors->first('catagory')}} </span>
 <br>
MobileNo:
<br>
<input type="number" value="{{$value->mobileno}}" name="mobileno"> <br>
<span style="color: red;" >{{$errors->first('mobileno')}} </span>
<br>

Worker Address:
<br>
<input type="text" value="{{$value->owneraddress}}" name="owneraddress"> <br>
<span style="color: red;" >{{$errors->first('owneraddress')}} </span>
<br>
NID No:
<br>
<input type="number" value="{{$value->nidno}}" name="nidno"> <br>
<span style="color: red;" >{{$errors->first('nidno')}} </span>
<br>
Workerimage:
<br>
@foreach(json_decode($value->image, true) as $image)

    
        <img src="{{ URL::to('images/'.$image)}}"
              alt="--" width="250" height="250" border="10px">
        
@endforeach
<br>
<input type="file" value="{{$value->image}}" name="image[]" multiple> <br>


</div>
</div>

<br><br>
<div class="subbutton">
<input type="submit">
</div>
</div>
</form>
</div>
@stop 