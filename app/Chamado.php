<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $table = 'chamados';
    public $timestamps = true;
    
    protected $fillable = [
        'titulo', 
        'descricao', 
        'id_u_atendente', 
        'id_u_solicita', 
        'id_status', 
        'id_prioridade'
    ]; 
    
    
    //relacionamento com atendente
    public function atendente() 
    {
        
        return $this->belongsTo('App\User', 'id_u_atendente');
        
    }
    
    //relacionamento com cliente
    public function cliente() 
    {
        
        return $this->belongsTo('App\User', 'id_u_solicita');
        
    }
    
    //relacionamento com status
    public function statuses()
    {
        
        return $this->belongsTo('App\Status', 'id_status');
        
    }
}
