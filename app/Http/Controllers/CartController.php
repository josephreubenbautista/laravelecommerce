<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Item;

class CartController extends Controller
{
	function index() {
		$session_cart_items = Session::get('cart');
		$cart_items = [];
		foreach($session_cart_items as $id => $quantity) {
			$item = Item::find($id);
			$item->quantity = $quantity;
			$cart_items[] = $item;
		}
		return view('cart.show_all', compact('cart_items'));
	}

	function checkout() {
		foreach(Session::get('cart') as $id => $quantity) {
			Auth::user()->orders()->attach($id, ['quantity'=>$quantity]);
		}
	}

    function create(Request $request) {
    	Session::put("cart.$request->id", $request->quantity);
    }
    // $_SESSION['cart'][$id] = $quantity
    // Session = [
    // 	cart => [
    // 		id => quantity
    // 	]
    // ]
}
