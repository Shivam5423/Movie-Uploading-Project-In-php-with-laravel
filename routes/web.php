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

use Illuminate\Http\Request;
Route::get('/', function () {
    return "<h1>Movie Application</h1>";
});


//Admin Module
#########################################

Route::prefix('/admin')->group(function()
{
	Route::get('/', function() {
    return view('login');

});
	 Route::post('/login','LoginController@login')->name('admin.login');
	 Route::get('/dashboard','LoginController@admindashboard')->name('admin.dashboard');
   Route::get('/logout','LoginController@logout')->name('admin.logout');

	 //role Route

   // Roles Route
    Route::get('/roles/create','RoleController@insertform')->name('roles.create');
    Route::post('/roles/save','RoleController@createRole')->name('roles.save');
    Route::get('/roles/show','RoleController@show')->name('roles.show');

    //partners Routes
    Route::get('/partners/create','partnersController@create')->name('partner.create');
    Route::post('/partners/save','partnersController@save')->name('partner.save');
    Route::get('/partners/show','partnersController@show')->name('partner.show');



});



#Admin Module
####################################################

Route::get('learn/path',function(){
    //Working with Laravel Path File System
    prx(storage_path(),false);
    prx(app_path(),false);
    prx(config_path(),false);

    prx(app_path('Helpers'),false);
    $laravel_session = storage_path('framework\sessions');
    prx($laravel_session);

 });

 
 #Session Routes
 Route::get('learn/session/add',function(Request $request){
    $request->session()->put('name','ravi');

    $name = $request->session()->get('name',NULL);
    echo "The session data is {$name}";
 });

 Route::get('learn/session/get',function(Request $request){

    $name = $request->session()->get('name',NULL);
    echo "The session data is still available {$name}";
 });


 Route::get('learn/session/new',function(Request $request){

    $name = $request->session()->get('name','LKG');

    echo "The session data is still available {$name}";
 });

 
 Route::get('learn/session/2',function(Request $request){

    $class = $request->session()->put('class','12th');
    $request->session()->put('marks',array(
        'maths' =>80,
        'hindi' => 100,
        'english' => 50
    ));

 });

 Route::get('learn/session/all',function(Request $request){

   echo '<pre>';
   $data = $request->session()->all();
   print_r($data);

 });


 Route::get('learn/session/class',function(Request $request){

   $class = $request->session()->get('class');
   prx($class);
 
  });

  
 Route::get('learn/session/hasclass',function(Request $request){

     prx($request->session()->has('class'));

});

Route::get('learn/session/addroll',function(Request $request){

    $request->session()->put('roll',NULL);
});

Route::get('learn/session/getroll',function(Request $request){

    prx($request->session()->get('roll'),false);
    prx($request->session()->exists('roll'));

});

Route::get('learn/session/destroy',function(Request $request){

    $request->session()->flush();
    
});


