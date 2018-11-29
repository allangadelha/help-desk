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
    
}
