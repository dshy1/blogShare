<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model 
{
	
	protected $table = 'categorias';
    protected $fillable = [
        'nome', 'descricao'
    ];

    ### Relations ///////////////////////

    // Many to Many - posts( uma categoria pode pertencer a vários posts )
    public function posts() {

        return $this->belongsToMany('App\Models\Post');
    }
    
}
