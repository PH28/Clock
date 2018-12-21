<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillabel = ['id','parent_id','name'];
    protected $guarded = array();  // fix _token gây ra lỗi không create request->all()

}
