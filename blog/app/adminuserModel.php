<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminuserModel extends Model
{
    public $table = 'adminuser';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
