<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    private $id;
    private $titulo;
    private $descricao;

    /**
     * Tema constructor.
     * @param $titulo
     * @param $descricao
     */
    public function __construct($titulo, $descricao)
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    protected $fillable = ['titulo', 'descricao', 'id'];

    public function resumo(){
        return $this->belongsTo('\App\Resumo','tema_id','id');
    }


}
