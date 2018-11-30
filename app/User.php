<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ativo', 'id_tipo_users'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function tipoUsuario()
    {
        
        return $this->belongsTo('App\TipoUsuario', 'id_tipo_users');
        
    }
    
    public function setor()
    {
        
        return $this->belongsTo('App\SetorCliente', 'setor_id');
        
    }
    
    public function setora()
    {
        
        return $this->belongsTo('App\SetorCliente', 'setor_id');
        
    }
}
