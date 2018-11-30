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
    
    public function cliente() 
    {
        
        return $this->hasMany('App\User', 'setor_id');
        
    }
    
    public function atendente() 
    {
        
        return $this->hasMany('App\User', 'setor_id');
        
    }
    
}
