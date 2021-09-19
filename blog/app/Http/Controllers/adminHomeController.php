<?php

namespace App\Http\Controllers;

use App\adminimamModel;
use App\adminuserModel;
use App\VisitorModel;
use App\ServicesModel;
use Illuminate\Http\Request;

class adminHomeController extends Controller
{
    public function adminHome()
    {
        $totalservice = ServicesModel::count();
        $totalimam = adminimamModel::count();
        $totaluser = adminuserModel::count();

        return view('Adminpanel', [

            'totalservice' => $totalservice,
            'totalimam' => $totalimam,
            'totaluser' => $totaluser,

        ]);
    }
}
