<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    public $timestamps = false;
    protected $table = 'users';
}
