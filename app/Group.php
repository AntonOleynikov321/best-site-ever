<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Group extends Model
{
    protected $fillable = ['name'];

    public function owner() {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function students() {
        return $this->belongsToMany(User::class);
    }

    public function hws() {
        return $this->hasMany(Hw::class);
    }

    public function materials()
  {
    return $this->hasMany(Materials::class);
  }
}
