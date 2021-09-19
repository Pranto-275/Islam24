<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminimamModel;

class userregController extends Controller
{
    public function Contactsend(Request $request)
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
            'imamid ' => $userid,
            'password ' => $password
        ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
