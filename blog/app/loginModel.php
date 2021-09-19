<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    public $table = 'loginInfo';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
