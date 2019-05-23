<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;
use App\User;

class Hw extends Model
{
   protected $fillable = ['name','finish'];
   
    public function user()
  {
    return $this->belongsTo(User::class);
  }
    public function group()
  {
    return $this->belongsTo(Group::class);
  }
}
