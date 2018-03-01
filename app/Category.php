<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model//nos muesta esto por defecto 
{
    //
    protected $table = "categories1";

    protected $fillable = ['name'];

    //creamos las relaciones 
    //el modelo de category se va a relacionar con la tabla de article
    public function articles()
    {
    	//auí establecemos las relaciones
    	//proviene de App y Article = Article.php
    	return $this->hasMany('App\Article');
    }
}
