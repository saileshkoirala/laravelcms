<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
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
    	$cat = categories::all();
    	return view('products.addproduct',compact("cat"));
    	
    }


    public function insertprod(Request $request)// To add categories into database
 	{
        //Input::file('file')->move(base_path() . 'public');
       
 		$proname = new products;
 		$proname->catname = Input::get('catname');
 		$proname->productname = Input::get('proname');
        $proname->description = Input::get('prodesc');
        $proname->price = Input::get('proprice');
        $proname->image = Input::get('proimage');
        //$filename = time(). '-' . $file->getClientOriginalName();
        //$proname = $proname->move(public_path().'/images/', $filename);
        //$post->image = '/images/'.$filename;
        //$proname->image = Input::get('proimage');
       // ->move(public_path().'/images/', $name);
       // $file = Input::get('proimage');

        

        $proname->save();

 		return back()->with('flash_message','Product added successfully');

	}

    function viewproduct()
    {
        $pro = products::all();
        return view('products.viewproduct',compact("pro"));
    }
}

