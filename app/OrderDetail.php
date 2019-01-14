<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $table = 'orders_detail';
  protected $fillabel = ['id','order_id','product_id','quantity','price'];
  protected $guarded = array();

  public function order(){
    return $this->belongsTo('App\Order','order_id','id');
  }

  public function product(){
		return $this->belongsTo('App\Product','product_id','id');
	}

}
