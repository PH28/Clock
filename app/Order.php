<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'orders';
  protected $fillabel = ['id','user_id','name','email','phone','address','status','total_price'];
  protected $guarded = array();

  public function user(){
    return $this->belongsTo('App\User','user_id','id');
  }

  public function order_detail(){
    return $this->hasMany('App\OrderDetail');
  }
}
