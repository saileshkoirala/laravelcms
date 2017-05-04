<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facebook;
use App\twitter;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class linkController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

	public function viewlink()
		{
			$flink = facebook::all();
        	$tlink = twitter::all();
    		return  view('links.link',compact("flink","tlink"));
		}

	public function insertflink(Request $request)
		{
			$face = new facebook;
			$face->flink = Input::get('fa');
	        $face->save();
	        return back();

	       
		}

	public function inserttlink(Request $request)
		{	
		 	$twit = new twitter;
	        $twit->tlink = Input::get('tw');
	        $twit->save();
	        return back();	
	     }   

public function deleteface($id)
    {
        $face = facebook::where('id',$id)->delete();   
        $twit = twitter::where('id',$id)->delete();
        return back()->with('flash_message','Deleted');
        
    }
public function deletetwit($id)
    {
        
        $twit = twitter::where('id',$id)->delete();
        return back()->with('flash_message','Deleted');
        
    }     
     
}
