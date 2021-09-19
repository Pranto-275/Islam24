<?php

namespace App\Http\Controllers;

use App\adminuserModel;
use Illuminate\Http\Request;

class adminuserController extends Controller
{
    function adminuserIndex()
    {
        return view('Adminuser');
    }

    public function getuserData()
    {
        $result = json_encode(adminuserModel::orderBy('id', 'desc')->get());
        return $result;
    }

    public function userDelete(Request $request)
    {
        $id = $request->input('id');

        $result = adminuserModel::where('id', '=', $id)->delete();

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }


    public function getuserDetails(Request $request)
    {
        $id = $request->input('id');
        $result = json_encode(adminuserModel::where('id', '=', $id)->get());
        return $result;
    }

    public function UserUpdate(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $des = $request->input('des');
        $img = $request->input('img');

        $result = adminuserModel::where('id', '=', $id)->update(
            [
                'name' => $name,
                'email' => $email,
                'mobile' => $mobile,
                'des' => $des,
                'img' => $img
            ]
        );
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
