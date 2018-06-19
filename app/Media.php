<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected $table = 'medias';


    public function competition()
    {
    	return $this->belongsTo('App\Competition', 'id');
    }
}
