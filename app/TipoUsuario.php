<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    
    protected $table = 'tipo_users';
    public $timestamps = false;
    
    protected $fillable = [
        'tipo'
    ]; 
    
}
