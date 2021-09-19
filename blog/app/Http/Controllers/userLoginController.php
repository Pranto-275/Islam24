<?php

namespace App\Http\Controllers;

use App\adminuserModel;
use App\loginModel;
use Illuminate\Http\Request;

class userLoginController extends Controller
{
    public function userLoginIndex()
    {
        return view('userlogin');
    }


    public function useronLogin(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('pass');

        $countValue = adminuserModel::where('userId', '=', $user)->where('password', '=', $pass)->count();
        if ($countValue == 1) {

            $request->session()->put('normaluser', $user);

            return 1;
        } else {
            return 0;
        }
    }


    //onlogout
    public function useronLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/userloginpage');
    }
}
