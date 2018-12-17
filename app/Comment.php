<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  //
  protected $fillable = [
      'content','product_id','user_id',
   ];

  public function products()
  {
    return $this->belongsTo('App\Product');
  }

  public function users()
  {
    return $this->belongsTo('App\User');
  }
}
