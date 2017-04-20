<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\reports;
use Illuminate\Support\Facades\View;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         

        $orders = reports::select(DB::raw('SUM(amount) as amount'))
                ->groupBy('date')
                ->get();                    
                
         $orders1 = reports::select(DB::raw('date as date'))
                   ->groupBy('date') 
                    ->get();                  
      
       
       
  //dd($orders->lists('date','amount'));

           return View::make('home')
                      ->with('dates', $orders1->lists('date'))  
                      ->with('totals', $orders->lists('amount'));
                      
                 
                      
    

   
                   
    }

   
}
