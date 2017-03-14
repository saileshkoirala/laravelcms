<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\subcategories;
use App\products;
use App\home;
use App\logoimages;
use App\Colors;
use Illuminate\Support\Facades\Input;



class Frontcontroller extends Controller
{


	
	public function front()
 	{
 		
 		
 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::all();
 		$prod = products::all();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('welcome',compact("img","pro","sub","col","prod"));

 		
    }

 	

 	public function product($id)
 	{
 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::where('id',$id)->get();
       // $getsub = subcategories::where(); //validating
 		//$prod = products::groupBy('p_id')->where('p_id',$getsub)->get();
 		$prod = products::all();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('webpage.product',compact("img","pro","sub","col","prod"));
		

 	}

 	public function single($id)
 	{
 		$pro = categories::groupBy('catname')->get();
 		$sub = subcategories::all();
 		$prod = products::where('id',$id)->get();
 		$lastlogo = logoimages::orderBy('created_at', 'desc')->first()->id;
 		$img = logoimages::where('id',$lastlogo)->get();
 		$lastrec = Colors::orderBy('created_at', 'desc')->first()->colname;
		$col = Colors::where('colname',$lastrec)->get();
 		return view('webpage.single',compact("img","pro","sub","col","prod"));
 		
 	}


 	

}


