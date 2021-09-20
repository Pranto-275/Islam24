<?php

namespace App\Http\Controllers;

use App\userQuestionModel;
use Illuminate\Http\Request;

class imamQAController extends Controller
{
    function getQAData()
    {
        $result = json_encode(userQuestionModel::orderBy('id', 'desc')->get());
        return $result;
    }


    function qnDelete(Request $req)
    {
        $id = $req->input('id');
        $result = userQuestionModel::where('id', '=', $id)->delete();

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }




    function qnUpdate(Request $req)
    {
        $id = $req->input('id');
        $answer = $req->input('answer');

        $result = userQuestionModel::where('id', '=', $id)->update(['answer' => $answer]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
