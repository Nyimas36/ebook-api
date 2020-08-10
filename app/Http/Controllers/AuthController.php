<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
    	return [
            "nama"=>"Nyimas Ananda Putri M",
            "nis"=> "XII RPL 3",
        ];
    }
}
