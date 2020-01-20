<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Portfolio extends Model {

    use Notifiable;
    use HasRoles;

    protected $fillable = [
        'titulo', 'slug', 'texto', 'url', 'image'
    ];
}
