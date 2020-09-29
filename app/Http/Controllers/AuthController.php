<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
    	return
    	[
    		"nis"=>"3103118046",
            "name"=>"Dimas Abyan Falah",
            "gender"=>"Laki-laki",
            "phone"=>"085876896280",
            "class"=>"XII RPL 2",
    	];
    }
}
