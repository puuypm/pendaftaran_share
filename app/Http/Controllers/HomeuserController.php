<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeuserController extends Controller
{
    //
    public function index(){
        return view('user.dashboard'); 
     }
}
