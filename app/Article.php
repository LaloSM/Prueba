<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];
    
    public function category()// category se queda en plural 
    {
    	return $this->belogsTo('App\Category');


    }

    public function user()
    {
    	return $this->belogsTo('App\User');
    }

    //-------------
    public function images()
    {
    	return $this->hasMany('App\Image');
    }
    //relación con la tabla tags MUCHOS A MUCHOS
    public function tags()
    {
    	return $this->belogsToMany('App\Tag')
    }
}
