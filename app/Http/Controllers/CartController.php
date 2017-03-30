<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;

class CartController extends Controller
{

	public function index()
	{
		$cartItems = Cart::content();
		return view('cart.index',compact('cartItems'));
	}

    public function create()
    {
    	
    }

    public function edit($id)
    {
    	$product = Products::find($id);
    	Cart::add($id,$product->prodname,1,$product->price);
        return back()->with('flash_message','item added successfully');
 
    }

    public function update(Request $request, $id)
    {
        Cart::update($id,$request->qty);
        return back();
    }

   public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
 }   
