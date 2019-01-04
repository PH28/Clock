<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = 'comments';
  protected $fillabel = ['id','content','product_id','user_id'];
  protected $guarded = array();  // fix _token gây ra lỗi không create request->all()

  public function product(){
    return $this->belongsTo('App\Product');
  }
  public function user(){
    return $this->belongsTo('App\User');
  }
}
