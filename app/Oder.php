<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
  //
  protected $fillable = [
      'phone','address','content','total_price','status','user_id'
   ];

  public function oder_details()
  {
    return $this->hasMany('App\Oder_detail');
  }

  public function users()
  {
    return $this->belongsTo('App\User');
  }
}
