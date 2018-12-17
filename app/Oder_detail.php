<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oder_detail extends Model
{
  //
  protected $fillable = [
      'quantity','price','oder_id','product_id'
   ];

  public function products()
  {
    return $this->belongsTo('App\Product');
  }

  public function oders()
  {
    return $this->belongsTo('App\Oder');
  }

}
