<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\AuthTraits\CanManageTrait;

class User extends Authenticatable
{
    use Notifiable, CanManageTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment(){
        return $this->hasMany('App\Comment', 'idUser', 'id');
    }

    public function danhgia(){
        return $this->hasMany('App\DanhGia', 'idUser', 'id');
    }
    public function tintuc()
    {
        return $this->hasMany('App\TinTuc','idUser','id');
    }
}
