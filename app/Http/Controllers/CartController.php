<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Products;
use App\orders;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;

class CartController extends Controller
{

	public function index()
	{
		$cartItems = Cart::content();
		return view('cart.index',compact('cartItems'));
	}

    public function create(Request $request)
    {
    	$order = new orders;
        $order->name = Input::get('name');
        $order->price = Input::get('price');
        $order->qty = Input::get('qty');
        $order->save();
        return back()->with('flash_message','Order Placed successfully');

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


    /*public function custorder(Request $request)
    {
        $orderdetails = new orders;
        $orderdetails->name = Input::get('pname');
        $orderdetails->price = Input::get('price');
        $orderdetails->qty = Input::get('qty');
        $orderdetails->save();
        return back()->with('flash_message','Categories added successfully');

    }*/
 }   
