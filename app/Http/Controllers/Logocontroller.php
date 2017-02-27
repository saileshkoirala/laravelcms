<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;
use App\Http\Requests;

class Logocontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /*public function changelogo()
    {
    	$chlogo = new logo;
    	$chlogo->logoimg = Input::get('logoname');
    	$chlogo->save();
    	return back();

    }*/

     public function changelogo()
     {
     	return view('appeareance.logo');
     }



}
