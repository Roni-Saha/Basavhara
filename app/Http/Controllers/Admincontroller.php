<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familyhouse;
use App\Office;
use App\Bachelor;
use App\Hostel;

class Admincontroller extends Controller
{
     public function index(){

  return view('backend.pages.index');

  }

  public function family(){
    $family= Familyhouse::all();
    return view('backend.pages.family',['family'=>$family]);
    
}

public function deletefamily($id){
  $family=Familyhouse::find($id);
  if( $family->delete()){
   return view('backend.pages.family',['family'=>$family]);
  }
}


  public function office(){
    $office= Office::all();
    return view('backend.pages.office',['office'=>$office]);
    
}

public function deleteoffice($id){
  $office=Office::find($id);
  if( $office->delete()){
   return view('backend.pages.office',['office'=>$office]);
  }
}


  public function bachelor(){
    $bachelor= Bachelor::all();
    return view('backend.pages.bachelor',['bachelor'=>$bachelor]);
    
}

public function deletebachelor($id){
  $bachelor=Bachelor::find($id);
  if( $bachelor->delete()){
   return view('backend.pages.bachelor',['bachelor'=>$bachelor]);
  }
}

  public function hostel(){
    $hostel= Hostel::all();
    return view('backend.pages.hostel',['hostel'=>$hostel]);
    
}

public function deletehostel($id){
  $hostel=Hostel::find($id);
  if( $hostel->delete()){
   return view('backend.pages.hostel');
  }
}

}
