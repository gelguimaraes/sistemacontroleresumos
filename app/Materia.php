<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    private $admin;
    private $faculdade;
    private $semestre;
    private $nome;
    private $id;


    protected $fillable = ['admin', 'faculdade','semestre', 'nome'];


    public function user(){
        return $this->morphOne(User::class, 'userable');
    }

    public function turma(){
        return $this->hasOne('\App\Turma','materia_id','id');
    }

    public function tema(){
        return $this->hasMany('\App\Tema','tema_id','id');
    }



}
