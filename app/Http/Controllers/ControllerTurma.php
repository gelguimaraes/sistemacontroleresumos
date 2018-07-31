<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTurma extends Controller
{


    public function createForm(){
        return view("forms/turma");
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
