<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{


    public function createForm(){
        return view("home/guest");
    }




}
