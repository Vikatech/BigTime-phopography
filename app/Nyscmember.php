<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
class Nyscmember extends Model
{
    //

     //
 public function user()
{
return $this->belongsTo('App\User');
}

protected $fillable = [
    'user_id','firstName','lastName','stateCode','phone','email','address','education','training','Schedule','start', 'end'
];

public function getfirstName()
{
return $this->FirstName;
}
}
