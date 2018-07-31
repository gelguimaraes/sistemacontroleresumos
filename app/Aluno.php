<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $aluno;
    protected $faculdade;
    protected $id;
    protected $user_id;

   protected $fillable = ['faculdade','user_id','id'];



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
