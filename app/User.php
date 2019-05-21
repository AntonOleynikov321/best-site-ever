<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

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
    
    public function teach_groups() {
        return $this->hasMany('App\Group', 'owner_id','id');
    }
    
    public function student_groups() {
        
    }

    /**
     * Получить все задачи пользователя.
     */
    public function groups() {
        return $this->hasMany(Group::class);
    }

}

