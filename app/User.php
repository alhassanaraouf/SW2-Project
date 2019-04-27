<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
   

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getAll()
    {
        return static::all();
    }


    public function findUser($id)
    {
        return static::find($id);
    }


    public function deleteUser($id)
    {
        return static::find($id)->delete();
    }

        protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}


