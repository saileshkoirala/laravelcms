<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\subcategories;
use App\home;
use App\products;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;


class Procontroller extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth');
    }


    public function addproduct()
    {
    	$scat = subcategories::all();
    	return view('products.addproduct',compact("scat"));
    	
    }


    public function insertprod(Request $request)// To add categories into database
 	{
        //Input::file('file')->move(base_path() . 'public');
       
 		$proname = new products;
        $proname->p_id = subcategories::where('subcatname','=',$request->input('subcat'))->pluck('id')[0];
 		$proname->prodname = Input::get('proname');
        $proname->prodesc = Input::get('prodesc');
        $proname->price = Input::get('proprice');
        $proname->image = Input::get('proimage');
        $proname->save();

 		return back()->with('flash_message','Product added successfully');

	}

    function viewproduct()
    {
        $pro = products::all();
        return view('products.viewproduct',compact("pro"));
    }
}

