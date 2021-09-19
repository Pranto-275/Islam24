<?php

namespace App\Http\Controllers;

use App\adminimamModel;
use Illuminate\Http\Request;

class adminimamController extends Controller
{
    function adminimamIndex()
    {
        return view('Adminimam');
    }

    public function getimamData()
    {
        $result = json_encode(adminimamModel::orderBy('id', 'desc')->get());
        return $result;
    }

    public function imamDelete(Request $request)
    {
        $id = $request->input('id');

        $result = adminimamModel::where('id', '=', $id)->delete();

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }


    public function imamDetails(Request $request)
    {
        $id = $request->input('id');
        $result = json_encode(adminimamModel::where('id', '=', $id)->get());
        return $result;
    }

    public function imamUpdate(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $des = $request->input('des');
        $img = $request->input('img');

        $result = adminimamModel::where('id', '=', $id)->update(
            [
                'name' => $name,
                'email' => $email,
                'mobile' => $mobile,
                'Details' => $des,
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
