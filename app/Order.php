<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'orders';
  protected $fillabel = ['id','name','email','phone','address','status','total_price'];
  protected $guarded = array();
}
