<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class Usuarios extends Authenticatable
{
    use HasFactory, Notifiable;
    public $fillable = [
        'nombre',
        'telefono',
        'rol',
        'email',
        'password'
    ];
}
