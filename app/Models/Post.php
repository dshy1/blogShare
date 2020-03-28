<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\User;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class Post extends Model 
{
	use Notifiable;
    use HasRoles;

    protected $table = 'posts';
    protected $fillable = [
        'titulo', 'slug', 'texto', 'image'
    ];

    ### Relations ///////////////////////

    // One to Many - autor( o post pertence a um usuário )
    public function autor() {

        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }

    // Many to Many - categorias( um post pode ter várias categorias )

    public function categorias() {

        // belongsToMany porque tem uma pivot table categoria_post
        return $this->belongsToMany(\App\Models\Categoria::class);
    }

}  // end class


