<?php

namespace App\Http\Controllers;

use App\adminimamModel;
use Illuminate\Http\Request;

class imamLoginController extends Controller
{
    public function imamLoginIndex()
    {
        return view('imamlogin');
    }


    public function imamonLogin(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('pass');

        $countValue = adminimamModel::where('imamid', '=', $user)->where('password', '=', $pass)->count();
        if ($countValue == 1) {


            $request->session()->put('imamuser', $user);

            return 1;
        } else {
            return 0;
        }
    }


    public function imaminfo(Request $request)
    {
        $imamuser = $request->session()->get('imamuser');
        $result = json_encode(adminimamModel::where('imamid', '=', $imamuser)->get());
        return $result;
    }


    public function imamonLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/imamloginpage');
    }
}
