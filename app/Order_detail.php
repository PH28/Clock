<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
  protected $table = 'orders_detail';
  protected $fillabel = ['id','order_id','product_id','quantity','price'];
  protected $guarded = array();

  public function order(){
    return $this->belongsTo('App\Order');
  }

}
