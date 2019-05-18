<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
      protected $fillable = ['name'];
      
       public function user() {
        return $this->belongsTo(User::class);
    }
}
