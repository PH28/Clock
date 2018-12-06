<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
  // muốn sử dụng soltdelete phải khai báo ở đây.

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
          'name','email','breed_id'
  ];
  protected $table = 'cats';
  // protected $primaryKey = 'id'; // tên cột ID trong table
  //
  // public $timestamps = false; // mặc định là false nếu bạn ko xài timestamps của laravel



  public function breed()
  {
    return $this->belongsTo('App\Breed');   // là khi bảng Cat muốn sử dụng dữ liệu bảng Breeds.
  }
}
