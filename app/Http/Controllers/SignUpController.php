<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SingUp;

class SignUpController extends Controller
{
    function create(Request $request){
        SingUp::create([
            'email' => $request->email   
        ]);

    }
    function show(){
        
    }
}
