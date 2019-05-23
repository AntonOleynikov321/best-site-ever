<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hws extends Model
{
    public function students() {
        return $this->belongsToMany(User::class);
    }
    
    public function student_groups() {
        return $this->belongsToMany(Group::class);
    }
}
