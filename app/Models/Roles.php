<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "roles";

    public $fillable = [
        'nombre'
    ];

    // Crear relación entre los roles y los usuarios
    public function usuarios(){
        return $this->hasMany('App\Models\Usuarios');
    }

    public function permisos() {
        return $this->hasMany('App\Models\Permisos');
    }
}
