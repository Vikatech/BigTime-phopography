<?php

namespace App;
use User;

use Illuminate\Database\Eloquent\Model;

class pics extends Model
{
    protected $fillable = [
        'id, user_id','picture'
    ];
    //
}
