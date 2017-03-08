<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\home;
use App\subcategories;
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
 		return view('categories.viewcategories',compact("cat"));
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
 		return back();

 	}

 	public function delete($id)
 	{
 		$cat = categories::where('id',$id)->delete();    
		return back()->with('flash_message','Category Deleted');
		
 	}

 	public function edit($id)
 	{
 		$cat = categories::with('catname',$id)->edit();
 	}
 	

}
