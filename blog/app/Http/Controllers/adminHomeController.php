<?php

namespace App\Http\Controllers;

use App\VisitorModel;
use App\ServicesModel;
use Illuminate\Http\Request;

class adminHomeController extends Controller
{
    public function adminHome()
    {
        $totalservice = ServicesModel::count();

        return view('Adminpanel', [

            'totalservice' => $totalservice,

        ]);
    }
}
