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
}
