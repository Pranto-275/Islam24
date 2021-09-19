<?php

namespace App\Http\Controllers;

use App\adminuserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userHomeController extends Controller
{
    public function userHome()
    {
        // $totalservice = ServicesModel::count();
        // $totalimam = adminimamModel::count();
        // $totaluser = adminuserModel::count();

        return view('Userpanel');
    }


    public function userinfo()
    {

        $users = DB::table('adminuser')->where('name', '=', 'Atiqur Rahman Pranto')->get();
        return view('Userprofile', ['users' => $users]);
    }
}
