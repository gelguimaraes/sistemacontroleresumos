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


    protected $fillable = ['admin', 'faculdade','semestre', 'nome', 'id'];

    /**
     * Materia constructor.
     * @param $admin
     * @param $faculdade
     * @param $semestre
     * @param $nome
     */
    public function __construct(\App\User $admin, string $faculdade, string $semestre, string $nome)
    {
        $this->admin = $admin;
        $this->faculdade = $faculdade;
        $this->semestre = $semestre;
        $this->nome = $nome;
    }

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }

    public function turma(){
        return $this->belongsTo('\App\Turma','materia_id','id');
    }

    public function resumo(){
        return $this->belongsTo('\App\Resumo','materia_id','id');
    }

}
