<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\brands;
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
    	$brand = brands::all();
    	return view('products.addproduct',compact("brand"));
    	
    }


    public function insertprod(Request $request)// To add products into database
 	{




 		$proname = new products;
        $proname->p_id = brands::where('brandname','=',$request->input('subcat'))->pluck('id')[0];
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

    public function delete($id)
    {
        $pro = products::where('id',$id)->delete();    
        return back()->with('flash_message','Product Deleted');
        
    }
}

