<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable {
    
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image'
    ];

    // Parei em 7 min
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // *** Relacionamentos ///////////////////////

    // Many to Many - politicas de acesso( um usuário pode ter várias politicas )
    // Qdo tiver Pivot table tem que usar belongsToMany nos dois Models
    public function roles() {

        return $this->belongsToMany('App\Models\Role');
    }

    // Many to Many - posts( um usuário pode ter vários posts )
    public function posts() {

        return $this->hasMany('App\Models\Post');
    }
    
} // end class
