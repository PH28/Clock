<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
  protected $fillable = [
        'id' , 'name',
  ];
  protected $table = 'breeds';

  public function cats()
  {
    return $this->hasManny('App\Cat'); // bảng Breeds sử dụng dữ liệu của bảng Cats(1-n)
  }

}
