<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    protected $fillable = ['brandname'];


 public function subcategories()
    {
    	return $this->belongsTo('App\subcategories');

    }

}