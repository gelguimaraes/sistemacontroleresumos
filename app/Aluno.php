<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $aluno;
    protected $faculdade;
    protected $id;
    protected $user_id;

   protected $fillable = ['faculdade','user_id'];

    /**
     * Aluno constructor.
     * @param $aluno
     * @param $faculdade
     */
//    public function __construct(string $faculdade, int $user_id){
//       // parent::__construct($name, $login, $email, $password, $photo, $isAdmin);
//        $this -> user_id = $user_id;
//        $this->faculdade = $faculdade;
//    }
    public function get($value='')
    {
       return app\Aluno::where('id', value)->first()
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
