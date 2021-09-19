<?php

use Illuminate\Support\Facades\Route;



//site
Route::get('/', 'HomeController@HomeIndex');
Route::post('/contactsend', 'HomeController@Contactsend');







//signup and login
Route::get('/signup', function () {
    return view('Signup');
});


//login

Route::get('/loginpage', 'LoginController@LoginIndex');
Route::post('/onLogin', 'LoginController@onLogin');
Route::get('/logout', 'LoginController@onLogout');



//admin panel

Route::get('/adminpanel', 'adminHomeController@adminHome')->middleware('adminlogincheck');
Route::get('/adminvisitor', 'VisitorController@VisitorIndex')->middleware('adminlogincheck');





//admin panel service management
Route::get('/adminservice', 'ServiceController@ServiceIndex')->middleware('adminlogincheck');
Route::get('/getServiceData', 'ServiceController@getServiceData')->middleware('adminlogincheck');
Route::post('/ServiceDelete', 'ServiceController@ServiceDelete')->middleware('adminlogincheck');
Route::post('/ServiceDetails', 'ServiceController@getServiceDetails')->middleware('adminlogincheck');
Route::post('/ServiceUpdate', 'ServiceController@ServiceUpdate')->middleware('adminlogincheck');
Route::post('/ServiceAdd', 'ServiceController@ServiceAdd')->middleware('adminlogincheck');

//admin user management

Route::get('/adminuser', 'adminuserController@adminuserIndex')->middleware('adminlogincheck');
Route::get('/getuserData', 'adminuserController@getuserData')->middleware('adminlogincheck');
Route::post('/userDelete', 'adminuserController@userDelete')->middleware('adminlogincheck');
Route::post('/userDetails', 'adminuserController@getuserDetails')->middleware('adminlogincheck');
Route::post('/userUpdate', 'adminuserController@UserUpdate')->middleware('adminlogincheck');



//admin imam  management

Route::get('/adminimam', 'adminimamController@adminimamIndex')->middleware('adminlogincheck');
Route::get('/getimamData', 'adminimamController@getimamData')->middleware('adminlogincheck');
Route::post('/imamDelete', 'adminimamController@imamDelete')->middleware('adminlogincheck');
Route::post('/imamDetails', 'adminimamController@imamDetails')->middleware('adminlogincheck');
Route::post('/imamUpdate', 'adminimamController@imamUpdate')->middleware('adminlogincheck');

//contact management
Route::get('/Contact', 'ContactController@ContactIndex')->middleware('adminlogincheck');
Route::get('/getContactData', 'ContactController@getContactData')->middleware('adminlogincheck');
Route::post('/ContactDelete', 'ContactController@ContactDelete')->middleware('adminlogincheck');





//userlogin

Route::get('/userloginpage', 'userLoginController@userLoginIndex');
Route::post('/useronLogin', 'userLoginController@useronLogin');
// Route::get('/userlogout', 'userLoginController@useronLogout');


//user


Route::get('/userpanel', 'userHomeController@userHome');
Route::get('/userprofile', 'userHomeController@userinfo');






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
