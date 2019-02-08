<?php 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//backend
Route::group(['middleware'=>'Islogged'],function(){

Route::get('/contactview','Admincontroller@contactview');

Route::get('/index','Admincontroller@index');

Route::get('family', 'Admincontroller@family');

Route::get('deletefamily/{id}', 'Admincontroller@deletefamily');

Route::get('familydetail/{id}', 'Admincontroller@familydetail');

Route::post('updatefamily/{id}', 'Admincontroller@updatefamily');

Route::get('familyupdate/{id}', 'Admincontroller@familyupdate');

Route::get('office', 'Admincontroller@office');

Route::get('deleteoffice/{id}', 'Admincontroller@deleteoffice');

Route::get('officedetail/{id}', 'Admincontroller@officedetail');

Route::post('updateoffice/{id}', 'Admincontroller@updateoffice');

Route::get('officeupdate/{id}', 'Admincontroller@officeupdate');

Route::get('bachelor', 'Admincontroller@bachelor');

Route::get('deletebachelor/{id}', 'Admincontroller@deletebachelor');

Route::get('bachelordetail/{id}', 'Admincontroller@bachelordetail');

Route::post('updatebachelor/{id}', 'Admincontroller@updatebachelor');

Route::get('bachelorupdate/{id}', 'Admincontroller@bachelorupdate');

Route::get('hostel', 'Admincontroller@hostel');

Route::get('deletehostel/{id}', 'Admincontroller@deletehostel');

Route::get('hosteldetail/{id}', 'Admincontroller@hosteldetail');

Route::post('updatehostel/{id}', 'Admincontroller@updatehostel');

Route::get('hostelupdate/{id}', 'Admincontroller@hostelupdate');

Route::get('transport', 'Admincontroller@transport');

Route::get('deletetransport/{id}', 'Admincontroller@deletetransport');

Route::get('transportdetail/{id}', 'Admincontroller@transportdetail');

Route::post('updatetransport/{id}', 'Admincontroller@updatetransport');

Route::get('transportupdate/{id}', 'Admincontroller@transportupdate');

Route::get('service', 'Admincontroller@service');

Route::get('deleteservice/{id}', 'Admincontroller@deleteservice');

Route::get('servicedetail/{id}', 'Admincontroller@servicedetail');

Route::post('updateservice/{id}', 'Admincontroller@updateservice');

Route::get('serviceupdate/{id}', 'Admincontroller@serviceupdate');
});

//frontend

   //

Route::get('/homelog','HomeController@homelog');
Route::get('/contact','HomeController@contact');

Route::get('about','HomeController@about');


Route::get('/login','HomeController@login');
Route::get('/register','HomeController@register');

Route::post('Storei','HomeController@Storei');
Route::post('loginStore','HomeController@loginStore');



Route::post('/store', 'HomeController@store');

// Route::post('/store', 'HomeController@store');




Route::get('/homefamily','HomeController@homefamily'); 

	

Route::post('loginStore','HomeController@loginStore');







Route::group(['middleware'=>'logged'],function(){

	Route::get('logout','HomeController@logout');

	 Route::get('/logout','HomeController@logout');
	Route::get('/home','HomeController@home');

Route::get('postoffice','HomeController@postoffice');

Route::get('postfamily','HomeController@postfamily');

Route::get('posthostel','HomeController@posthostel');

Route::get('postbachelor','HomeController@postbachelor');

Route::get('postservice','HomeController@postservice');

Route::get('postsublet','HomeController@postsublet');

Route::get('posttransport','HomeController@posttransport');

//for posting



Route::post('postcontact','HomeController@postcontact');

Route::post('familypost', 'HomeController@familypost');

Route::post('hostelpost', 'HomeController@hostelpost');

Route::post('officepost', 'HomeController@officepost');

Route::post('bachelorpost', 'HomeController@bachelorpost');

Route::post('transportpost', 'HomeController@transportpost');

Route::post('servicepost', 'HomeController@servicepost');


//for retrive
    //family
Route::get('viewfamily','HomeController@viewfamily');

Route::get('detailfamily/{id}','HomeController@detailfamily');
Route::get('detailfamily','HomeController@detailfamily');
Route::get('/searchfamily','HomeController@searchfamily');
    //

   //hostel
Route::get('viewhostel','HomeController@viewhostel');

Route::get('detailhostel','HomeController@detailhostel');

Route::get('detailhostel/{id}','HomeController@detailhostel');

Route::get('/searchhostel','HomeController@searchhostel');


   //

   //bachelor
Route::get('viewbachelor','HomeController@viewbachelor');

Route::get('detailbachelor/{id}','HomeController@detailbachelor');
Route::get('detailbachelor','HomeController@detailbachelor');
Route::get('/searchbachelor','HomeController@searchbachelor');
   //

   //service
Route::get('viewservice','HomeController@viewservice');

Route::get('detailservice/{id}','HomeController@detailservice');

Route::get('/searchservice','HomeController@searchservice');
   //

   //transport
Route::get('viewtransport','HomeController@viewtransport');

Route::get('detailtransport/{id}','HomeController@detailtransport');

Route::get('/searchtransport','HomeController@searchtransport');
   //

   //office
Route::get('viewoffice','HomeController@viewoffice');

Route::get('detailoffice/{id}','HomeController@detailoffice');
Route::get('detailoffice','HomeController@detailoffice');
Route::get('/searchoffice','HomeController@searchoffice');


});