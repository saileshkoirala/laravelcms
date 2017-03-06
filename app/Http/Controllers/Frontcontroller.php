<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\products;
use App\home;
use App\logoimages;
use App\Colors;
use Illuminate\Support\Facades\Input;



class Frontcontroller extends Controller
{


	
	public function front()
 	{
 		
 		
 		
 		$pro = products::all();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('welcome',compact("img","pro","col"));
 		//return view('welcome',compact("img"));
    }

 	

 	function product()
 	{
 		return view('webpage.product');
 	}

 	

}


