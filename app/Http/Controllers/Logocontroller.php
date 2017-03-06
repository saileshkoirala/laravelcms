<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\logoimages;
use Illuminate\Support\Facades\Input;

class Logocontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
   

     public function changeLogo()
     {
     	return view('appeareance.logo');
     }

      public function updateLogo(Request $request)
    {
        
        $chlogo = new logoimages;
        
        $chlogo->image = Input::get('logoname'); 
        
        $chlogo->save();
        return back()->with('flash_message','Logo Updated');
        

    }

   

}
