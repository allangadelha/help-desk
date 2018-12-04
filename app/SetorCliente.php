<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetorCliente extends Model
{
    
    protected $table = 'setor_clientes';
    public $timestamps = false;
    
    protected $fillable = [
        'setor'
    ];  
    
    //relacionamento com cliente
    public function cliente() 
    {
        
        return $this->hasMany('App\User', 'setor_id');
        
    }
    
    //relacionamento com atendente
    public function atendente() 
    {
        
        return $this->hasMany('App\User', 'setor_id');
        
    }
    
}
