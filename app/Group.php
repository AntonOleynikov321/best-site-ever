<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Group extends Model {

    protected $fillable = ['name'];

    public function owner() {
        return $this->belongsTo(User::class,'owner_id');
    }

    public function students() {
        return $this->belongsToMany(User::class);
    }

}
