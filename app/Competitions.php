<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitions extends Model
{
    //
    protected $table = 'competitions';

    public function user()
    {
        //Nom de la colonne competitions qui est en foreign key
    	return $this->belongsTo("App\User", 'users_id');
    }

    public function epreuves()
    {
        return $this->belongsToMany('App\Epreuves');
    }

    public function media()
    {
        return $this->hasMany('App\Media', 'extern_id');
    }

    public static function allCompetitions()
    {
    	return self::where([
            ['date', '>=', date('Y-m-d')],
            ['valid', '=', 1]])
            ->orderBy('date', 'asc')
            ->take(10)
            ->get();
    }
}
