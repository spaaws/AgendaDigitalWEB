<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //Contatos que vieram do ContatoController e que seram adicionado ao Banco de Dados
    protected $fillable = ['nome','email','fone','facebook','twitter','instagram','cep','logradouro','bairro','localidade','uf','user_id'];
    protected $guarded  = ['id','created_at','update_at'];

    //O método abaixo está indicando que User será utilizada dentro de Contato.
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function getFoneAttribute()
    {
        $fone = $this->attributes['fone'];
        if ($fone != null)
            return "(".substr($fone, 0, 2).") ".substr($fone, 2, 5)."-".substr($fone,7, 4);
        else
            return "(XX) XXXXX-XXXX";
        //$fone = $this->attributes['fone'];
        //return substr($fone, 0, 2).substr($fone, 2, 5).substr($fone,7, 4); 
    }

    public function getNomeAttribute()
    {

       $nome = $this->attributes['nome'];
            return mb_strtoupper ($nome,"utf-8" );
       // $nomeCompleto = (explode(" ",$nome));
       //     return $nomeCompleto[0];

        //if (count($nomeCompleto) == 1)
        //    return $nomeCompleto[0];
        //else
        //    return $nomeCompleto[0].' '.$nomeCompleto[1];
    }
}