<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familyhouse;
use App\Office;
use App\Bachelor;
use App\Hostel;
use App\Transport;
use App\Service;
use App\Contact;
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

public function familydetail($id){
    $value = Familyhouse::find($id);

  return view('backend.pages.familydetail',['value'=>$value]);
   
  }

      public function familyupdate($id){
    $value = Familyhouse::find($id);

  return view('backend.pages.familyupdate',['value'=>$value]);
   
  }

  public function updatefamily(Request $request , $id){
  $obj=Familyhouse::find($id);
       $validatedData = $request->validate([
   'flatname'  => 'required',
    'location'  => 'required',
    'size' =>'required',
    
    'rent'  =>'required|integer',
    'bedroom'  => 'required|integer',
    'drawingroom' => 'required|integer',
    'diningroom'  => 'required|integer' ,
    'storeroom' => 'required|integer',
    'kitchen'  =>'required|integer',
    'balcony'  => 'required|integer',
    'attachbathroom'  =>'required|integer',
    'commonbathroom'  => 'required|integer',
    'floorlevel' => 'required|integer',
    'securitydeposite'  => 'required',
    'ownername'  => 'required',
    'mobileno'  => 'required',
    'email' => 'required | email',
    'owneraddress'  => 'required' ,

    ]);
    if($request->hasfile('flatimage'))
          {

            foreach($request->file('flatimage') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 
   

   
    $obj->flatname = $request->flatname;
    $obj->location = $request->location;
    $obj->size = $request->size;
    $obj->image = json_encode($data);
    $obj->rent = $request->rent;
    $obj->bedroom = $request->bedroom;
    $obj->drawingroom = $request->drawingroom;
    $obj->diningroom = $request->diningroom;
    $obj->storeroom = $request->storeroom;
    $obj->kitchen = $request->kitchen;
    $obj->balcony = $request->balcony;
    $obj->attachroom = $request->attachbathroom;
    $obj->commonroom = $request->commonbathroom;
    $obj->floorlevel = $request->floorlevel;
    $obj->securitydeposite = $request->securitydeposite;
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->email = $request->email;
    $obj->owneraddress = $request->owneraddress;
    

    if($obj->save()){
        
    	  return redirect('/family');
       // return view('backend.pages./hostel');
    
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

public function officedetail($id){
    $value = Office::find($id);

  return view('backend.pages.officedetail',['value'=>$value]);
   
  }

    public function officeupdate($id){
    $value = Office::find($id);

  return view('backend.pages.officeupdate',['value'=>$value]);
   
  }

  public function updateoffice(Request $request , $id){
  $obj=Office::find($id);
        $validatedData = $request->validate([
   'flatname'  => 'required',
    'location'  => 'required',
    'size' =>'required',
    
    'rent'  =>'required|integer',
    'tottalroom'  => 'required|integer',
    'bathroom'  => 'required|integer',
    'floorlevel' => 'required|integer',
    'securitydeposite'  => 'required',
    'ownername'  => 'required',
    'mobileno'  => 'required',
    'email' => 'required | email',
    'owneraddress'  => 'required' ,

    ]);
    if($request->hasfile('flatimage'))
          {

            foreach($request->file('flatimage') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 
   


    $obj->flatname = $request->flatname;
    $obj->location = $request->location;
    $obj->size = $request->size;
    $obj->image = json_encode($data);
    $obj->rent = $request->rent;
    $obj->tottalroom = $request->tottalroom;
    $obj->bathroom = $request->bathroom;
    $obj->floorlevel = $request->floorlevel;
    $obj->securitydeposite = $request->securitydeposite;
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->email = $request->email;
    $obj->owneraddress = $request->owneraddress;

    if($obj->save()){
        
    	  return redirect('/office');
       // return view('backend.pages./hostel');
    
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

public function bachelordetail($id){
    $value = Bachelor::find($id);

  return view('backend.pages.bachelordetail',['value'=>$value]);
   
  }

   public function bachelorupdate($id){
    $value = Bachelor::find($id);

  return view('backend.pages.bachelorupdate',['value'=>$value]);
   
  }

  public function updatebachelor(Request $request , $id){
  $obj=Bachelor::find($id);
        $validatedData = $request->validate([
   'flatname'  => 'required',
    'location'  => 'required',
    'size' =>'required',
    
    'rent'  =>'required|integer',
    'bedroom'  => 'required|integer',
    'drawingroom' => 'required|integer',
    'diningroom'  => 'required|integer' ,
    'kitchen'  =>'required|integer',
    'attacbathhroom'  =>'required|integer',
    'commonbathroom'  => 'required|integer',
    'floorlevel' => 'required|integer',
    'securitydeposite'  => 'required',
    'ownername'  => 'required',
    'mobileno'  => 'required',
    'email' => 'required | email',
    'owneraddress'  => 'required' ,

    ]);
    if($request->hasfile('flatimage'))
          {

            foreach($request->file('flatimage') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 
   

    $obj->flatname = $request->flatname;
    $obj->location = $request->location;
    $obj->size = $request->size;
    $obj->image = json_encode($data);
    $obj->rent = $request->rent;
    $obj->bedroom = $request->bedroom;
    $obj->drawingroom = $request->drawingroom;
    $obj->diningroom = $request->diningroom;
    $obj->kitchen = $request->kitchen;
    $obj->attacbathhroom = $request->attacbathhroom;
    $obj->commonbathroom = $request->commonbathroom;
    $obj->floorlevel = $request->floorlevel;
    $obj->securitydeposite = $request->securitydeposite;
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->email = $request->email;
    $obj->owneraddress = $request->owneraddress;
    

    if($obj->save()){
        
    	  return redirect('/bachelor');
       // return view('backend.pages./hostel');
    
    }
}

  public function hostel(){
    $hostel= Hostel::all();
    return view('backend.pages.hostel',['hostel'=>$hostel]);
    
}

public function deletehostel($id){
  $hostel=Hostel::find($id);
  if( $hostel->delete()){
   return view('backend.pages.hostel',['hostel'=>$hostel]);
  }
}

public function hosteldetail($id){
    $value = Hostel::find($id);

  return view('backend.pages.hosteldetail',['value'=>$value]);
   
  }

    public function hostelupdate($id){
    $value = Hostel::find($id);

  return view('backend.pages.hostelupdate',['value'=>$value]);
   
  }

  public function updatehostel(Request $request , $id){
  $obj=Hostel::find($id);
     $validatedData = $request->validate([

    'hostelname' => 'required',
    'location'  => 'required',
    'size' =>'required',
     
    'rent'  =>'required',
    'commonroom'  => 'required',
    'kitchenroom' => 'required',
    'diningroom'  => 'required', 
    'availableseat' =>'required',
    'perroomseat'  => 'required',
    'attacbathhroom'  =>'required', 
    'commonbathroom'  => 'required',
    'floorlevel' => 'required',
    'securitydeposite'  => 'required',
    'ownername'  => 'required',
    'mobileno'  => 'required',
    'email' => 'required|email',
    'owneraddress'  =>'required',
       ]);
     if($request->hasfile('hostelimage'))
          {

            foreach($request->file('hostelimage') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 

  
   

    
    $obj->hostelname = $request->hostelname;
    $obj->location = $request->location;
    $obj->size = $request->size;
    $obj->image =json_encode($data);
    $obj->rent = $request->rent;
    $obj->commonroom = $request->commonroom;
    $obj->diningroom = $request->diningroom;
    $obj->availableseat = $request->availableseat;
    $obj->perroomseat = $request->perroomseat;
    $obj->kitchen = $request->kitchenroom;
    $obj->attacbathhroom = $request->attacbathhroom;
    $obj->commonbathroom = $request->commonbathroom;
    $obj->floorlevel = $request->floorlevel;
    $obj->securitydeposite = $request->securitydeposite;
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->email = $request->email;
    $obj->owneraddress = $request->owneraddress;
    

    if($obj->save()){
        
    	  return redirect('/hostel');
       // return view('backend.pages./hostel');
    
    }
}



  public function transport(){
    $transport= Transport::all();
    return view('backend.pages.transport',['transport'=>$transport]);
    
}

public function deletetransport($id){
  $transport=Transport::find($id);
  if( $transport->delete()){
   return view('backend.pages.transport',['transport'=>$transport]);
  }
}

public function transportdetail($id){
    $value = Transport::find($id);

  return view('backend.pages.transportdetail',['value'=>$value]);
   
  }

   public function transportupdate($id){
    $value = Transport::find($id);

  return view('backend.pages.transportupdate',['value'=>$value]);
   
  }

  public function updatetransport(Request $request , $id){
  $obj=Transport::find($id);
    $validatedData = $request->validate([
   'catagory'  => 'required',
    'location'  => 'required',
    
    'ownername'  => 'required',
    'mobileno'  => 'required',
    'email' => 'required | email',
    

    ]);
    if($request->hasfile('image'))
          {

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 
   

    $obj->catagory = $request->catagory;
    $obj->location = $request->location;
    $obj->image = json_encode($data);
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->email = $request->email;
    
    

    if($obj->save()){
        
    	 return redirect('/transport');
       // return view('backend.pages./hostel');
    
    }
}

  public function service(){
    $service= Service::all();
    return view('backend.pages.service',['service'=>$service]);
    
}

public function deleteservice($id){
  $service=Service::find($id);
  if( $service->delete()){
   return view('backend.pages.service',['service'=>$service]);
  }
}

public function servicedetail($id){
    $value = Service::find($id);

  return view('backend.pages.servicedetail',['value'=>$value]);
   
  }

   public function serviceupdate($id){
    $value = Service::find($id);

  return view('backend.pages.serviceupdate',['value'=>$value]);
   
  }

  public function updateservice(Request $request , $id){
  $obj=Service::find($id);
       $validatedData = $request->validate([
   'ownername'  => 'required',
    'catagory'  => 'required',
    
    'mobileno'  => 'required',
    'owneraddress'  => 'required',
    'nidno' => 'required',
    

    ]);
    if($request->hasfile('image'))
          {

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 
   

   
    $obj->catagory = $request->catagory;
    $obj->owneraddress = $request->owneraddress;
    $obj->image = json_encode($data);
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->nidno = $request->nidno;

    if($obj->save()){
        
    	  return redirect('/service');
       // return view('backend.pages./hostel');
    
    }
}


  public function contactview(){
    $contactview= Contact::all();
    return view('backend.pages.contactview',['contactview'=>$contactview]);
    
}

}
