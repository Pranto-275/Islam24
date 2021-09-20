<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userQuestionModel extends Model
{
    public $table = 'userquestion';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public  $timestamps = false;
}
