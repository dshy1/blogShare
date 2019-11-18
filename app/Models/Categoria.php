<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
       protected $fillable = [
        'nome', 'descricao'
    ];

    // many to many com posts
    public function posts() {

        return $this->belongsToMany('App\Models\Post');
    }
    
}
