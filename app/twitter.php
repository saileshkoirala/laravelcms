<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class twitter extends Model
{
	protected $table = 'twitter';
    protected $fillable = ['tlink'];
}
