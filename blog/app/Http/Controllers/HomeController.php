<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;
use App\ContactModel;

class HomeController extends Controller
{
    function HomeIndex()
    {
        $UserIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address' => $UserIP, 'visit_time' => $timeDate]);
        $ServicesData = json_decode(ServicesModel::all());

        return view('Home', [
            'ServicesData' => $ServicesData
        ]);
    }

    public function Contactsend(Request $request)
    {
        $name = $request->input('contact_name');
        $mobile = $request->input('contact_mobile');
        $email = $request->input('contact_email');
        $msg = $request->input('contact_msg');


        $result =  ContactModel::insert([
            'contact_name' => $name,
            'contact_mobile' => $mobile,
            'contact_email' => $email,
            'contact_msg' => $msg
        ]);

        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
