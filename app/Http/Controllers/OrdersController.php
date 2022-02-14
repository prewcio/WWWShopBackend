<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Customer;
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
        $customerID = $customer->id;
        $cart = Cart::where('customerID', $customerID)->first();
        return view('internal.order', [
            'cart' => $cart
        ]);
    }

    public function order(){
        return Redirect::back();
    }
}
