<?php

namespace App\Http\Controllers;

use App\userQuestionModel;
use Illuminate\Http\Request;

class UserQuestionController extends Controller
{
    function getuserquestionData()
    {
        $result = json_encode(userQuestionModel::orderBy('id', 'desc')->get());
        return $result;
    }
}
