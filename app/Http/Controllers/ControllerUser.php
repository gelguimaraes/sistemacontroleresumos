<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerUser extends Controller
{


    public function createForm(){
        return view("forms/user");
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

   public function aluno()
   {
      return App/Aluno::where('id',$this->id);
   }

    public function register(){
        $credenciais = Request::all(); 

        if(User::create($credenciais)){
            return "Usuario ". credenciais->input('nome ')."registrado com sucesso";
        }

        return "Usuario não cadastrado";
    }
}
