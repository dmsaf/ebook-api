<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
    	return
    	[
    		"NISN"=>"3103118046",
    		"Nama"=>"Dimas Abyan Falah",
    		"Gender"=>"Laki-laki",
    		"Phone"=>"085876896280",
    		"Kelas"=>"XII RPL 2",
    	];
    }
}
