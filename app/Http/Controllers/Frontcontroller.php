<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\subcategories;
use App\products;
use App\home;
use App\brands;
use App\logoimages;
use App\Colors;
use App\facebook;
use App\twitter;
use Illuminate\Support\Facades\Input;



class Frontcontroller extends Controller
{


	
	public function front()
 	{
 		
 		
 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::all();
 		$brand = brands::all();
 		$prod = products::all();
 		$face = facebook::all();
 		$twit = twitter::all();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('welcome',compact("img","pro","sub","col","prod","brand","face","twit"));

 		
    }

 	

 	public function product($id)
 	{
 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::where('id',$id)->get();
 		$brand = brands::all();
 		$prod = products::all();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('webpage.product',compact("img","pro","sub","col","prod","brand"));
		

 	}

 	public function subcat($id)
 	{
 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::where('id',$id)->get();
 		$brand = brands::where('id',$id)->get();
 		$prod = products::all();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('webpage.subcat1',compact("img","pro","sub","col","prod","brand"));
		

 	}

 	public function single($id)
 	{
 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::where('id',$id)->get();
 		$brand = brands::where('id',$id)->get();
 		$prod = products::where('id',$id)->get();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('webpage.single',compact("img","pro","sub","col","prod","brand"));
 		
 	}

 	public function cregister()
 	{

 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::all();
 		$brand = brands::all();
 		$prod = products::all();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('customersignup.custregister',compact("img","pro","sub","col","prod","brand"));
 		
 	}

 	

}


