<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    protected $fillable = ['subcatname','catname','image'];

	

	public function categories()
	{
		$this->belongsTo('App\categories');
	}

	public function brands()
	{
		$this->hasMany('App\brands');
	}

    /*public function products()
    {
    	$this->hasMany('App\products');
    }*/

}
