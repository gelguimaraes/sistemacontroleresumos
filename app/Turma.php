<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Turma extends Model
{
    private $alunos;
    private $materia;
    private $id;


    protected $fillable = ['alunos', 'materia', 'id'];

    /**
     * Turma constructor.
     * @param $alunos
     * @param $materia
     */
    public function __construct(\ArrayObject $alunos, \App\Materia $materia)
    {
        $this->alunos = $alunos;
        $this->materia = $materia;
    }

    public function aluno(){
        return $this->hasMany('\App\Aluno', 'aluno_id','id');
    }

    public function materia(){
        return $this->hasOne('\App\Materia', 'materia_id','id');
    }

}
