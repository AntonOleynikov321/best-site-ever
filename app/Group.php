<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $fillable = ['name'];

<<<<<<< HEAD
    public function owner() {
        return $this->belongsTo(User::class);
=======
    public function user() {
        return $this->belongsTo('App\Group');
>>>>>>> 24f5d6c0de5521d155711b860b9720ca43a40852
    }

}
