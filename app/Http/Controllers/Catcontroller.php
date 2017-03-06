<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\categories;
use App\home;
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

 	public function delete($id)
 	{
 		$cat = categories::where('ID',$id)->delete();    
		return back()->with('flash_message','Category Deleted');
		
 	}

 	public function edit($id)
 	{
 		$cat = categories::with('catname',$id)->edit();
 	}
 	

}
