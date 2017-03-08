<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['subcatname','prodname','prodesc','price','image'];
    


    public function subcategories()
    {
    	$this->belongsTo('App\subcategories');
    }
}
