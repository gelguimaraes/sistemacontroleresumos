<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTema extends Controller
{


    public function createForm(){
        return view("forms/tema");
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
