<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $fillable = ['name'];

    public function owner() {
        return $this->belongsTo(User::class);
    }

}
