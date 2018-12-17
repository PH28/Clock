<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillabel = ['id','cat_id','name','price','made','image','description','content','status','sale','created_at', 'updated_at'];
  protected $guarded = array();
  public function category(){
    return $this->belongsTo('App\Category');
  }
}
