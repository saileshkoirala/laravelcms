<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\products;
use App\home;
use Illuminate\Support\Facades\Input;

class Frontcontroller extends Controller
{


	function front()
 	{
 		
 		
 		
 		$pro = products::all();

 		return view('welcome',compact("pro"));

 	}

 	function product()
 	{
 		return view('webpage.product');
 	}
}


