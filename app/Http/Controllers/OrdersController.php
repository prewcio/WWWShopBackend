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
        $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
        $cart = Cart::where('customerID', $customerID)->first();
        if($cart){
            $items = Product::all();
            return view('internal.order', [
                'product1'=>$items->first(),
                'product2'=>$items->last(),
                'cart' => $cart
            ]);
        } else {
            return view('internal.order', [
               'cart'=>$cart
            ]);
        }

    }

    public function order(){
        return Redirect::back();
    }
}
