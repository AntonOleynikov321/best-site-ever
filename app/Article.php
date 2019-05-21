<?php

namespace App;

use App\Group;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name','text'
        ];
    
    /**
   * Получить группу - владельца данной статьи
   */
  public function group()
  {
    return $this->belongsTo(Group::class);
  }
}
