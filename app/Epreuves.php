<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epreuves extends Model
{
    //
    public function competitions()
    {
    	return $this->belongsToMany('App\Competitions');
    }
}
