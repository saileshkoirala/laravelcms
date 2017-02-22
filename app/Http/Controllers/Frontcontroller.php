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
 		
 		//$cat = categories::all();
 		//$pro = products::select('productname')->where($cat='catname')->get();
 		//$pro = products::all();
 		
 		$pro = products::all();

 		return view('welcome',compact("pro"));

 	}
}


//select productname from products p, categories c where p.catname=c.catname;