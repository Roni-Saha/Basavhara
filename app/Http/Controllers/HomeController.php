<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familyhouse;
use App\Hostel;

class HomeController extends Controller
{
   public function home(){

  return view('frontend.pages.home');

  }


    public function contact(){

	return view('frontend.pages.contact');

  }


   public function about(){

	return view('frontend.pages.about');

  }


   public function login(){
    	return view('frontend.pages.login');
    }

    

     public function postoffice(){
    	return view('frontend.pages.postoffice');
    }

     public function postfamily(){
    	return view('frontend.pages.postfamily');
    }

     public function posthostel(){
    	return view('frontend.pages.posthostel');
    }

    public function postbachelor(){
    	return view('frontend.pages.postbachelor');
    }

     public function postworker(){
    	return view('frontend.pages.postworker');
    }

       public function postsublet(){
    	return view('frontend.pages.postsublet');
    }

      public function posttransport(){
    	return view('frontend.pages.posttransport');
    }



// posting

// family
public function familypost(Request $request){
    $flatname  = $request->flatname;
    $location  = $request->location;
    $size = $request->size;
      if($request->hasfile('flatimage'))
          {

            foreach($request->file('flatimage') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 
    $rent  = $request->rent;
    $bedroom  = $request->bedroom;
    $drawingroom = $request->drawingroom;
    $diningroom  = $request->diningroom; 
    $storeroom = $request->storeroom;
    $kitchen  = $request->kitchen;
    $balcony  = $request->balcony; 
    $attachbathroom  = $request->attachbathroom;
    $commonbathroom  = $request->commonbathroom;
    $FloorLevel = $request->FloorLevel;
    $SecurityDeposit  = $request->SecurityDeposit; 
    $ownername  = $request->ownername;
    $mobileno  = $request->mobileno;
    $email = $request->email;
    $owneraddress  = $request->owneraddress; 

  
   

    $obj = new Familyhouse();
    $obj->flatname = $flatname;
    $obj->location = $location;
    $obj->size = $size;
    $obj->image = json_encode($data);
    $obj->rent = $rent;
    $obj->bedroom = $bedroom;
    $obj->drawingroom = $drawingroom;
    $obj->diningroom = $diningroom;
    $obj->storeroom = $storeroom;
    $obj->kitchen = $kitchen;
    $obj->balcony = $balcony;
    $obj->attachroom = $attachbathroom;
    $obj->commonroom = $commonbathroom;
    $obj->floorlevel = $FloorLevel;
    $obj->securitydeposite = $SecurityDeposit;
    $obj->ownername = $ownername;
    $obj->mobileno = $mobileno;
    $obj->email = $email;
    $obj->owneraddress = $owneraddress;
    

    if($obj->save()){
        echo 'Successfully Inserted';
       
    
    }
}

//view family

public function viewfamily(){
    $viewfamily= Familyhouse::all();
    return view('frontend.pages.viewfamily',['viewfamily'=>$viewfamily]);
    
}



// hostel
public function hostelpost(Request $request){
    $hostelname  = $request->hostelname;
    $location  = $request->location;
    $size = $request->size;
      if($request->hasfile('hostelimage'))
          {

            foreach($request->file('hostelimage') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         } 
    $rent  = $request->rent;
    $commonroom  = $request->commonroom;
    $kitchenroom = $request->kitchenroom;
    $diningroom  = $request->diningroom; 
    $availableseat = $request->availableseat;
    $perroomseat  = $request->perroomseat;
    $attachbathroom  = $request->attachbathroom; 
    $commonbathroom  = $request->commonbathroom;
    $floorlevel = $request->floorlevel;
    $SecurityDeposit  = $request->SecurityDeposit; 
    $ownername  = $request->ownername;
    $mobileno  = $request->mobileno;
    $email = $request->email;
    $owneraddress  = $request->owneraddress; 

  
   

    $obj = new Hostel();
    $obj->hostelname = $hostelname;
    $obj->location = $location;
    $obj->size = $size;
    $obj->image = json_encode($data);
    $obj->rent = $rent;
    $obj->commonroom = $commonroom;
    $obj->diningroom = $diningroom;
    $obj->availableseat = $availableseat;
    $obj->perroomseat = $perroomseat;
    $obj->kitchen = $kitchenroom;
    $obj->attacbathhroom = $attachbathroom;
    $obj->commonbathroom = $commonbathroom;
    $obj->floorlevel = $floorlevel;
    $obj->securitydeposite = $SecurityDeposit;
    $obj->ownername = $ownername;
    $obj->mobileno = $mobileno;
    $obj->email = $email;
    $obj->owneraddress = $owneraddress;
    

    if($obj->save()){
        echo 'Successfully Inserted';
       
    
    }
}

//view hostel

public function viewhostel(){
    $viewhostel= Hostel::all();
    return view('frontend.pages.viewhostel',['viewhostel'=>$viewhostel]);
    
}

}