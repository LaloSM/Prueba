<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = "Tags";
    protected $fillable = ['name'];

    //relacion muchos a muchos 
    public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }

}
