<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillabel = ['id','name','email','phone','password','level'];
    public $timestamp = false;
}
