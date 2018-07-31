<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Turma extends Model
{
    private $alunos;
    private $materia;
    private $id;


    protected $fillable = ['alunos', 'materia'];

    public function aluno(){
        return $this->hasMany('\App\Aluno', 'aluno_id','id');
    }

    public function materia(){
        return $this->belongsTo('\App\Materia', 'materia_id','id');
    }


}
