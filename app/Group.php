<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];
    
    /**
   * Получить все статьи группы
   */
  public function articles()
  {
    return $this->hasMany(Article::class);
  }
}
