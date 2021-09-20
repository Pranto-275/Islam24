<?php

namespace App\Http\Controllers;

use App\adminimamModel;
use Illuminate\Http\Request;
use App\adminuserModel;

class userregController extends Controller
{
    public function regUser(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $userid = $request->input('userid');
        $password = $request->input('password');



        $result =  adminuserModel::insert([
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'userId' => $userid,
            'password' => $password
        ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }

    public function regImam(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $userid = $request->input('userid');
        $password = $request->input('password');



        $result =  adminimamModel::insert([
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'imamid' => $userid,
            'password' => $password
        ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
