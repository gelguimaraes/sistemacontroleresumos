<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{


    public function createForm(){
        return view("admin");
    }

    public function get(Request $req, int $id){

    }

    public function add(string $nome){

    }

    public function delete(int $id){

    }

    public function update(int $id){

    }

    public function list(){

    }


}
