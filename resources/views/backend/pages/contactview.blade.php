
@extends('backend.layouts.defaults')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  margin-left: 300px;
  margin-top: 100px;
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 50%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>
  <div class="app-content content">
      <div class="content-wrapper">
        
        <div class="content-body">
	<div  class="container">
	 <div class="table-responsive">
    <br> <br><br>
 <table class="table" id="myTable">
    <thead>
    
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        
        <th>Action</th>

        
      
    </thead>
    <tbody>
     
        @foreach($contactview as $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->message }}</td>
           
            <td>
              
            	 <a id="myBtn" data-toggle="modal" data-target="#{{$value->id}}" class="btn btn-primary">DELETE</a>

               <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Are you want to delete <b> {{ $value->catagory }}</b> message?</p>
  </div>
     <div class="modal-footer">
          <a href="{{ URL::to('deletetransport/'.$value->id) }}" class="btn btn-primary">Yes</a>
         

        </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

  
    
        ||<a href="transportupdate/{{$value->id}}" class="btn btn-success">Edit</a>


        

            </td>
          </tr>

        @endforeach
      
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
<script
  
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>

	  



@stop 