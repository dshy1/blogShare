<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;


class Post extends Model {

	// use Notifiable;
 //    use HasRoles;

    protected $fillable = [
        'titulo', 'slug', 'texto', 'image','user_id'
    ];



     // *** Relacionamentos ///////////////////////

    // Many to Many - autor( um post pertence a um usuário )
      public function autor() {

        return $this->belongsTo(\App\User::class);
    }

    // Many to Many - categorias( um post pode ter várias categorias )
     public function categorias() {

        return $this->belongsToMany(\App\Models\Categoria::class);
    }

}  // end class

// FAZER SEED PARA O POST
