<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridade extends Model
{
    
    protected $table = 'prioridades';
    public $timestamps = false;
    
    protected $fillable = [
        'prioridade'
    ]; 
    
}
