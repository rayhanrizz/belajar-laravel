<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public $table = "user";
    protected $primaryKey = 'id_user';
    protected $fillable = ['nama', 'username', 'password'];
    protected $hidden = ['password'];
}
