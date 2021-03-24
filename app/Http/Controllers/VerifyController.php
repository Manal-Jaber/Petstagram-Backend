<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verify (){
        return response()->json(['method'=>'verified']);
    }
}
