<?php
 
namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Familyhouse;
use App\Hostel;
use App\Office;
use App\Bachelor;
use App\Transport;
use App\Service;
use App\Contact;

class HomeController extends Controller
{
   public function home(){

  return view('frontend.pages.home');

  }


   


   public function about(){

	return view('frontend.pages.about');

  }


   public function login(){
    	return view('frontend.pages.login');
    }

    public function contact(){
        return view('frontend.pages.contact');
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

     public function postservice(){
    	return view('frontend.pages.postservice');
    }

       public function postsublet(){
    	return view('frontend.pages.postsublet');
    }

      public function posttransport(){
    	return view('frontend.pages.posttransport');
    }



// posting

//contact
     public function postcontact(Request $request){
         $validatedData = $request->validate([
   'name'  => 'required',
    'email'  => 'required|email',
    'message' =>'required',
]);

    $obj = new Contact();
    $obj->name = $request->name;
    $obj->email = $request->email;
    $obj->message = $request->message;


    if($obj->save()){
        
       return view('frontend.pages.contact');
    }
    

  }

// family

public function familypost(Request $request){
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
   

    $obj = new Familyhouse();
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
         return view('frontend.pages.postfamily');
       
    
    }
}

//view family

public function viewfamily(){
    $viewfamily= Familyhouse::paginate(6);
    return view('frontend.pages.viewfamily',['viewfamily'=>$viewfamily]);
    
}

public function detailfamily($id){
    $value = Familyhouse::find($id);

  return view('frontend.pages.detailfamily',['value'=>$value]);
   
  }


  public function search(Request $request){
    $search=$request->get('search');
    $viewfamily= Familyhouse::where('location','like','%' .$search. '%')->paginate(6);
    return view('frontend.pages.viewfamily',['viewfamily'=>$viewfamily]);
    
}




// hostel
public function hostelpost(Request $request){
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
    'attachbathroom'  =>'required', 
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

  
   

    $obj = new Hostel();
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
    $obj->attacbathhroom = $request->attachbathroom;
    $obj->commonbathroom = $request->commonbathroom;
    $obj->floorlevel = $request->floorlevel;
    $obj->securitydeposite = $request->securitydeposite;
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->email = $request->email;
    $obj->owneraddress = $request->owneraddress;
    

    if($obj->save()){
         return view('frontend.pages.posthostel');
       
    
    }
}

//view hostel

public function viewhostel(){
    $viewhostel= Hostel::paginate(6);
    return view('frontend.pages.viewhostel',['viewhostel'=>$viewhostel]);
    
}

public function detailhostel($id){
    $value = Hostel::find($id);

  return view('frontend.pages.detailhostel',['value'=>$value]);
   
  }


//office post

public function officepost(Request $request){
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
   

    $obj = new Office();
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
         return view('frontend.pages.postoffice');
       
    
    }
}


public function viewoffice(){
    $viewoffice= Office::paginate(6);
    return view('frontend.pages.viewoffice',['viewoffice'=>$viewoffice]);
    
}


//bachelor post
public function bachelorpost(Request $request){
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
   

    $obj = new Bachelor();
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
         return view('frontend.pages.postbachelor');
       
    
    }
}

public function viewbachelor(){
    $viewbachelor= Bachelor::paginate(6);
    return view('frontend.pages.viewbachelor',['viewbachelor'=>$viewbachelor]);
    
}

public function detailbachelor($id){
    $value = Bachelor::find($id);

  return view('frontend.pages.detailbachelor',['value'=>$value]);
   
  }

//transport post

public function transportpost(Request $request){
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
   

    $obj = new Transport();
    $obj->catagory = $request->catagory;
    $obj->location = $request->location;
    $obj->image = json_encode($data);
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->email = $request->email;
    
    

    if($obj->save()){
         return view('frontend.pages.posttransport');
       
    
    }
}

public function viewtransport(){
    $viewtransport= Transport::paginate(6);
    return view('frontend.pages.viewtransport',['viewtransport'=>$viewtransport]);
    
}

//service post


public function servicepost(Request $request){
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
   

    $obj = new Service();
    $obj->catagory = $request->catagory;
    $obj->owneraddress = $request->owneraddress;
    $obj->image = json_encode($data);
    $obj->ownername = $request->ownername;
    $obj->mobileno = $request->mobileno;
    $obj->nidno = $request->nidno;
    
    

    if($obj->save()){
         return view('frontend.pages.postservice');
       
    
    }
}

public function viewservice(){
    $viewservice= Service::paginate(6);
    return view('frontend.pages.viewservice',['viewservice'=>$viewservice]);
    
}

}