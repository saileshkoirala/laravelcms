<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories_subcategories extends Model
{
	public function categories()
    {
    	return $this->belongsTo('App\categories','id');

    }
    public function subcategories()
    {
    	return $this->belongsTo('App\subcategories','id');

    }
}
