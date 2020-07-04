<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
	'video_path'
    ];

    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id');
    }
}
