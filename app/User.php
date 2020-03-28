<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPassword;


class User extends Authenticatable {
    
    use Notifiable;
    use HasRoles;
   
    protected $fillable = [
        'name', 'email', 'password', 'image'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // *** Relacionamentos ///////////////////////

    // Many to Many - politicas de acesso ( um usuário pode ter várias politicas )
    public function roles() {

        return $this->belongsToMany(\App\Models\Role::class);
    }

    // One to Many - posts ( um usuário pode ter vários posts )
    public function posts() {
        
        return $this->hasMany(\App\Models\Post::class, 'user_id', 'id');
    }

    public function sendPasswordResetNotification($token) {
  
        $this->notify(new ResetPassword($token));
        
    }
    
} // end class
