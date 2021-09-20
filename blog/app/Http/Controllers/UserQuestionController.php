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


    public function questionsend(Request $request)
    {
        $name = $request->input('name');
        $category = $request->input('category');
        $question = $request->input('question');



        $result =  userQuestionModel::insert([
            'name' => $name,
            'catagory' => $category,
            'question' => $question,
        ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
