<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Customer;
use App\Product;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;

class OrdersController extends BaseController
{
    public function index(){
        if(!isset($_COOKIE['sessionID']))
            setcookie('sessionID',csrf_token(), time()+(86400*30));
        $carts = Cart::all();
        $items = array();
        $itQua = array();
        foreach($carts as $cart) {
            if ($cart->sessionID == $_COOKIE['sessionID']) {
                $items[] = Product::where('id', $cart->itemID)->first();
                $itQua[] = $cart->itemQuantity;
            } else {
                $cart = 0;
            }
        }
        return view('internal.order',[
            'items'=>$items,
            'itemsQuantity'=>$itQua,
            'cart'=>$cart
        ]);
    }
    public function order(){
        return Redirect::back();
    }
}
