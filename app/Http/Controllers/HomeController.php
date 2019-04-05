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
use App\Login;
use Session; 
class HomeController extends Controller
{
   public function homelog(){

  $viewfamily= Familyhouse::paginate(6);
    return view('frontend.pages.homelog',['viewfamily'=>$viewfamily]);

  }

   public function register(){

  return view('frontend.pages.register');

  }
 public function login(){

  return view('frontend.pages.login');
}



public function loginStore(Request $request){
  $email = $request->email;
  $password = $request->password;

  $login =login::where('email','=',$email)
  ->where('password','=',$password)
  ->where('type','=','user')
  ->first();

  $loged =login::where('email','=',$email)
  ->where('password','=',$password)
  ->where('type','=','admin')
  ->first();


if($login){
  Session::put('loginid',$login->id);
  Session::put('loginemail',$login->email);
  Session::put('logintype',$login->type);
  return redirect('/home');
}
if($loged){
  Session::put('logid',$loged->id);
  Session::put('loginemail',$loged->email);
  Session::put('logintype',$loged->type);
  return redirect('/index');
}
else{
  return redirect('/login');
}
}
// public function Storei(Request $request){
  
//   $result=DB::insert("insert into logins(name,email,password,type) values(? ,? ,?,'user')",[$request->input('name'),$request->input('email'),$request->input('password')]);

//   return redirect('/login');
// }

public function logout(Request $request){
        if($request->session()->has('loginid')){
          
          $request->session()->flush();
           return redirect('/homelog');

  }
  else{
    return redirect('/homelog');
    
  }
  $request->session()->flush();
}


// public function store(Request $request){


   
//     $name = $request->username;
//     $email = $request->useremail;
//     $password = $request->userpassword; 
  

//     $obj = new login();
//     $obj->name = $name;
//     $obj->email = $email;
//     $obj->password = $password;

//     if($obj->save()){
//         return redirect('/allpost');
       
//     }
// }


  public function store(Request $request){


   
    $name = $request->name;
    $email = $request->email;
    $password = $request->password; 
  

    $obj = new Login();
    $obj->name = $name;
    $obj->email = $email;
    $obj->password = $password;
    $obj->type='user';

    if($obj->save()){
        return redirect('/home');
       
    }
}

// public function logout(Request $request){
//   if($request->session()->has('userid')){
//      $request->session()->flush();
//   }
//   else{
//     return redirect('/homelog');
//   }
//   $request->session()->flush();
// }


// public function loginStore(Request $request){
//   $email = $request->email;
//   $password = $request->password;

//   $login =login::where('email','=',$email)
//   ->where('password','=',$password)
//   ->first();


// if($login){
//   Session::put('loginid',$login->id);
//   Session::put('loginemail',$login->email);
//   return redirect('/home');
// }
// else{
//   echo 'user not found';
// }
// }

   public function about(){

	return view('frontend.pages.about');

  }


   // public function login(){
   //  	return view('frontend.pages.login');
   //  }

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

public function home(){
    $viewfamily= Familyhouse::where('status','active')->paginate(6);
    return view('frontend.pages.home',['viewfamily'=>$viewfamily]);
    
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
    $obj->image =json_encode($data);
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
    $obj->status = 'deactive';

    if($obj->save()){
         return view('frontend.pages.postfamily');
       
    
    }
}

//view family

public function viewfamily(){
    $viewfamily= Familyhouse::where('status','active')->paginate(6);
    return view('frontend.pages.viewfamily',['viewfamily'=>$viewfamily]);
    
}

public function detailfamily($id){
    $value = Familyhouse::find($id);
      return view('frontend.pages.detailfamily',['value'=>$value]);
   
  }

  public function sendsms(Request $request, $id){
    $value = Familyhouse::find($id);
    $value = Office::find($id);
    $value = Hostel::find($id);
    $value = Bachelor::find($id);
    $value = Transport::find($id);
    $value = Service::find($id);
    $message = $request->input('message');
    //echo $message;
    $num = $value->mobileno;
    $basic = new \Nexmo\Client\Credentials\Basic('137e0256', 'xDCK0sGIUD0GKsXm');
            $client = new \Nexmo\Client($basic);

            $message = $client->message()->send([
                'to' => '880'.(int)$num,
                'from' => 'HMS',
                'text' => $message,
            ]); 

      return redirect()->back()->with('message', 'SMS received by customer.');
  }


public function searchfamily(Request $request){
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
    $obj->status = 'deactive';
    

    if($obj->save()){
         return view('frontend.pages.posthostel');
       
    
    }
}

//view hostel

public function viewhostel(){
    $viewhostel= Hostel::where('status','active')->paginate(6);
    return view('frontend.pages.viewhostel',['viewhostel'=>$viewhostel]);
    
}

public function detailhostel($id){
    $value = Hostel::find($id);

  return view('frontend.pages.detailhostel',['value'=>$value]);
   
  }

  public function searchhostel(Request $request){
    $search=$request->get('search');
    $viewhostel= Hostel::where('location','like','%' .$search. '%')->paginate(6);
    return view('frontend.pages.viewhostel',['viewhostel'=>$viewhostel]);
    
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
    $obj->status = 'deactive';

    if($obj->save()){
         return view('frontend.pages.postoffice');
       
    
    }
}


public function viewoffice(){
    $viewoffice= Office::where('status','active')->paginate(6);
    return view('frontend.pages.viewoffice',['viewoffice'=>$viewoffice]);
    
}

public function detailoffice($id){
    $value = Office::find($id);

  return view('frontend.pages.detailoffice',['value'=>$value]);
   
  }

   public function searchoffice(Request $request){
    $search=$request->get('search');
    $viewoffice= office::where('location','like','%' .$search. '%')->orwhere('rent', '<=', [$search])->paginate(6);
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
    $obj->status = 'deactive';

    if($obj->save()){
         return view('frontend.pages.postbachelor');
       
    
    }
}

public function viewbachelor(){
    $viewbachelor= Bachelor::where('status','active')->paginate(6);
    return view('frontend.pages.viewbachelor',['viewbachelor'=>$viewbachelor]);
    
}

public function detailbachelor($id){
    $value = Bachelor::find($id);

  return view('frontend.pages.detailbachelor',['value'=>$value]);
   
  }

    public function searchbachelor(Request $request){
    $search=$request->get('search');
    $viewbachelor= Bachelor::where('location','like','%' .$search. '%' )->paginate(6);
    return view('frontend.pages.viewbachelor',['viewbachelor'=>$viewbachelor]);
    
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
    $obj->status = 'deactive';
    

    if($obj->save()){
         return view('frontend.pages.posttransport');
       
    
    }
}

public function viewtransport(){
    $viewtransport= Transport::where('status','active')->paginate(6);
    return view('frontend.pages.viewtransport',['viewtransport'=>$viewtransport]);
    
}

 public function searchtransport(Request $request){
    $search=$request->get('search');
    $viewtransport= Transport::where('location','like','%' .$search. '%' )->paginate(6);
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
    $obj->status = 'deactive';
    

    if($obj->save()){
         return view('frontend.pages.postservice');
       
    
    }
}

public function viewservice(){
    $viewservice= Service::where('status','active')->paginate(6);
    return view('frontend.pages.viewservice',['viewservice'=>$viewservice]);
    
}

 public function searchservice(Request $request){
    $search=$request->get('search');
    $viewservice= Service::where('owneraddress','like','%' .$search. '%' )->paginate(6);
    return view('frontend.pages.viewservice',['viewservice'=>$viewservice]);
    
}

}