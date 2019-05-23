<?php

namespace App;

use App\Group;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $fillable = [
        'name','text','file',
        ];
    
    /**
   * Получить группу - владельца данной статьи
   */
  public function group()
  {
    return $this->belongsTo(Group::class);
  }
}
