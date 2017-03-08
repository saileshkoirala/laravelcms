<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
	{
    protected $fillable = [ 'catname' ];



    public function subcategories()
    {
    	return $this->hasMany('App\subcategories');

    }

    
}
