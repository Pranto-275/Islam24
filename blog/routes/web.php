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
Route::get('/', function () {
    return view('Home');
});


Route::get('/signup', function () {
    return view('Signup');
});



Route::get('/login', function () {
    return view('Login');
});

//admin panel

Route::get('/adminpanel', function () {
    return view('Adminpanel');
});


Route::get('/adminvisitor', function () {
    return view('AdminVisitor');
});



Route::get('/adminservice', function () {
    return view('Adminservice');
});



Route::get('/adminuser', function () {
    return view('Adminuser');
});


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
