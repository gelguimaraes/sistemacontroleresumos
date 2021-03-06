<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumo extends Model
{
    private $materia;
    private $nome;
    private $aluno;
    private $texto;
    private $tema;
    private $id;

    /**
     * Resumo constructor.
     * @param $materia
     * @param $nome
     * @param $aluno
     * @param $texto
     * @param $tema
     */
    public function __construct(\App\Materia $materia, string $nome, \App\Aluno $aluno, string $texto, \App\Tema $tema)
    {
        $this->materia = $materia;
        $this->nome = $nome;
        $this->aluno = $aluno;
        $this->texto = $texto;
        $this->tema = $tema;
    }

    protected $fillable = ['materia', 'nome','aluno', 'texto', 'tema', 'id'];


    public function aluno(){
        return $this->hasOne('\App\Aluno','aluno_id','id');
    }

    public function tema(){
        return $this->belongsTo('\App\Tema','tema_id','id');
    }

}
