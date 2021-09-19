<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminimamModel extends Model
{
    public $table = 'adminimam';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
