<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['image', 'user_id', 'name', 'address', 'desigenation'];
        
    
    function user(){
        return $this->hasOne('App\User');
    }
}
