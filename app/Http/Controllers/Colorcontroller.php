<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Colors;
use Illuminate\Support\Facades\Input;

class Colorcontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
   

     public function changeColor()
     {
     	return view('appeareance.color');
     }

      public function updateColor(Request $request)
    {
        $chcolor = new Colors;
        $chcolor->colname = Input::get('colorname'); 
        $chcolor->save();
        return back()->with('flash_message', 'Color Changed Successfully');
        

    }

   

}
