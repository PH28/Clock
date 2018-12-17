<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //
  protected $fillable = [
      'name','made','price','price_sale','image','description','content','status','category_id'
   ];

  public function comments()
  {
    return $this->hasMany('App\Comment');
  }

  public function oder_details()
  {
    return $this->hasMany('App\Oder_detail');
  }

  public function categories()
  {
    return $this->belongsTo('App\Category');
  }
}
