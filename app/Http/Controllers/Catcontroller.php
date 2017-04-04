<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\home;
use App\subcategories;
use App\brands;
use Illuminate\Support\Facades\Input;


class Catcontroller extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

	function addcategories()
	{
		return  view('categories.addcategories');

	}
 	function viewcategories()
 	{
 		$cat = categories::all();
 		$scat = subcategories::all();
 		$bname = brands::all();	
 		return view('categories.viewcategories',compact("cat","scat","bname"));
 	}
 	public function insert(Request $request)// To add categories into database
 	{
 		$catname = new categories;
 		$catname->catname = Input::get('catname');
 		$catname->save();
 		return back()->with('flash_message','Categories added successfully');


 	}
 	

 	function addsubcategories()
 	{
 		$option = categories::all();
 		return view('categories.subcategories',compact('option'));
 	}


 	public function insertsub(Request $request)
 	{


 		$subcat = new subcategories;
 		$subcat->sub_id = categories::where('catname','=',$request->input('catname'))->pluck('id')[0];
       	$subcat->subcatname	 = Input::get('subcatname');
		$subcat->image = Input::get('subimage');
 		$subcat->save();
 		return back()->with('flash_message','sub category added successfully');

 	}

 	function addbrand()
 	{
 		$brandoption = subcategories::all();
 		return view('categories.brand',compact('brandoption'));
 	}

 	public function insertbrand(Request $request)
 	{
 		$bname = new brands;
 		$bname->b_id = subcategories::where('subcatname','=',$request->input('subcatname'))->pluck('id')[0];
 		$bname->brandname = Input::get('brandname');
 		$bname->save();
 		return back()->with('flash_message','Successfully added');
 	}

 	public function deletecat($id)
 	{
 		$cat = categories::where('id',$id)->delete(); 
 	   
		return back()->with('flash_message','Category Deleted');
		
 	}

 	public function deletescat($sid)
 	{
 		$scat = subcategories::where('id',$sid)->delete(); 
 	   
		return back()->with('flash_message','subcategory Deleted');
		
 	}

 	public function deletebrand($bid)
 	{
 		$bname = brands::where('id',$bid)->delete();
 		return back()->with('flash_message','Successfully Deleted');
 	}


 	public function edit($id)
 	{
 		$cat = categories::with('catname',$id)->edit();
 	}
 	

}
