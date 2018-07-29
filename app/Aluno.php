<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $aluno;
    protected $faculdade;
    protected $id;

   protected $fillable = ['aluno', 'faculdade','id'];

    /**
     * Aluno constructor.
     * @param $aluno
     * @param $faculdade
     */
    public function __construct(\App\User $aluno, string $faculdade,
                                string $name, string $login, string $email, string $password,
                                string $photo, boolean $isAdmin){
        parent::__construct($name, $login, $email, $password, $photo, $isAdmin);

        $this->aluno = $aluno;
        $this->faculdade = $faculdade;
    }

    public function user(){
        return $this->morphOne(\App\User::class, 'userable');
    }

    public function resumo(){
        return $this->belongsTo('\App\Resumo','aluno_id','id');
    }

    public function turma(){
        return $this->belongsTo('\App\Turma','aluno_id','id');
    }

}
