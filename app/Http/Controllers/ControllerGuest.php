<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerGuest extends Controller
{


    public function createForm(){
        return View::make("home.guest");
    }




}
