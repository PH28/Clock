<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillabel = ['id','cate_id','name','price','made','image','description','content','roles','sale'];
  protected $guarded = array();   // fix _token gây ra lỗi không create request->all()

  public function category(){
    return $this->belongsTo('App\Category','cate_id','id');
  }
  public function comment(){
    return $this->hasMany('App\Comment');
  }
}
