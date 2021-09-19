<?php

use Illuminate\Support\Facades\Route;

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
//site
Route::get('/', 'HomeController@HomeIndex');





Route::get('/signup', function () {
    return view('Signup');
});



Route::get('/login', function () {
    return view('Login');
});

//admin panel

Route::get('/adminpanel', 'adminHomeController@adminHome');
Route::get('/adminvisitor', 'VisitorController@VisitorIndex');





//admin panel service management
Route::get('/adminservice', 'ServiceController@ServiceIndex');
Route::get('/getServiceData', 'ServiceController@getServiceData');
Route::post('/ServiceDelete', 'ServiceController@ServiceDelete');
Route::post('/ServiceDetails', 'ServiceController@getServiceDetails');
Route::post('/ServiceUpdate', 'ServiceController@ServiceUpdate');
Route::post('/ServiceAdd', 'ServiceController@ServiceAdd');

//admin user management

Route::get('/adminuser', 'adminuserController@adminuserIndex');
Route::get('/getuserData', 'adminuserController@getuserData');
Route::post('/userDelete', 'adminuserController@userDelete');
Route::post('/userDetails', 'adminuserController@getuserDetails');
Route::post('/userUpdate', 'adminuserController@UserUpdate');



//imam user management

Route::get('/adminimam', 'adminimamController@adminimamIndex');
Route::get('/getimamData', 'adminimamController@getimamData');
Route::post('/imamDelete', 'adminimamController@imamDelete');
Route::post('/imamDetails', 'adminimamController@getimamDetails');
Route::post('/imamUpdate', 'adminimamController@imamUpdate');






Route::get('/adminimam', function () {
    return view('Adminimam');
});


Route::get('/admincomment', function () {
    return view('Admincomments');
});


//user
Route::get('/userpanel', function () {
    return view('Userpanel');
});


Route::get('/userprofile', function () {
    return view('Userprofile');
});


Route::get('/userquestion', function () {
    return view('Userquestion');
});

Route::get('/useranswers', function () {
    return view('Useranswers');
});

Route::get('/usercimam', function () {
    return view('UserCimam');
});


//imam
Route::get('/imampanel', function () {
    return view('Imampanel');
});


Route::get('/imamprofile', function () {
    return view('Imamprofile');
});


Route::get('/imamqn', function () {
    return view('Imamqn');
});

Route::get('/onlineclass', function () {
    return view('Imamclass');
});
