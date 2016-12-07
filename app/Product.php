<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'description', 'price', 'category_id', 'user_id'];

  public function category() {
    return $this->belongsTo('App\Category');
  }

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function images() {
    return $this->hasMany('App\Image');
  }

  public function materials() {
    return $this->belongsToMany('App\Material');
  }

  public function scopeVisibles($query){
    $query->where('visible', 1);
  }

  public function scopeName($query, $name) {
    if (trim($name) != "") {
      $query->where('name', 'LIKE', "%$name%");
    }

  }
}
