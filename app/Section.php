<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $fillable = [
	'section_name'
    ];

    public function videos()
    {
        return $this->hasMany('App\Video');   
    }
}
