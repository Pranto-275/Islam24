<?php

use Illuminate\Support\Facades\Route;



//site
Route::get('/', 'HomeController@HomeIndex');
Route::post('/contactsend', 'HomeController@Contactsend');
Route::get('/getquestionData', 'HomeController@getquestionData');







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
Route::get('/userlogout', 'userLoginController@useronLogout');



//userreg
Route::post('/reguser', 'userregController@regUser');

//user


Route::get('/userpanel', 'userHomeController@userHome')->middleware('userlogincheck');
Route::get('/userprofile', 'userHomeController@userinfo')->middleware('userlogincheck');


Route::get('/getuserData', 'UserQuestionController@getuserquestionData');
Route::post('/questionsend', 'UserQuestionController@questionsend');





Route::get('/userquestion', function () {
    return view('Userquestion');
})->middleware('userlogincheck');

Route::get('/useranswers', function () {
    return view('Useranswers');
})->middleware('userlogincheck');

Route::get('/usercimam', function () {
    return view('UserCimam');
})->middleware('userlogincheck');





//imam reg
Route::get('/imamregpage', function () {
    return view('imamreg');
});

Route::post('/regimam', 'userregController@regImam');

//imamlogin

Route::get('/imamloginpage', 'imamLoginController@imamLoginIndex');
Route::post('/imamonLogin', 'imamLoginController@imamonLogin');
Route::get('/imamlogout', 'imamLoginController@imamonLogout');

//imam
Route::get('/imampanel', function () {
    return view('Imampanel');
})->middleware('imamlogincheck');


Route::get('/imamprofile', function () {
    return view('Imamprofile');
})->middleware('imamlogincheck');


Route::get('/imamqn', function () {
    return view('Imamqn');
})->middleware('imamlogincheck');


//imam question answer
Route::get('/getqnData', 'imamQAController@getQAData');
Route::post('/qnDelete', 'imamQAController@qnDelete');
Route::post('/qnUpdate', 'imamQAController@qnUpdate');


Route::get('/onlineclass', function () {
    return view('Imamclass');
})->middleware('imamlogincheck');
