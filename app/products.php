<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['catname', 'productname','description','price','image'];
    

    public $timestamps = false;
}
