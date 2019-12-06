<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\User;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;


class Post extends Model {

	use Notifiable;
    use HasRoles;

    protected $fillable = [
        'titulo', 'slug', 'texto', 'image','user_id'
    ];



     // *** Relacionamentos ///////////////////////

    // Many to Many - autor( o post pertence a um usuário )
    // Depois do ::class coloca virgula. O primeiro parâmetro é o da tabela users que seria id e depois outra virgula e segundo parâmetro qual campo da sua tabela ele relaciona.

      public function autor() {

        return $this->hasOne(\App\User::class, 'id', 'user_id');
    }

    // Many to Many - categorias( um post pode ter várias categorias )

     public function categorias() {

        return $this->belongsToMany(\App\Models\Categoria::class);
    }

}  // end class


