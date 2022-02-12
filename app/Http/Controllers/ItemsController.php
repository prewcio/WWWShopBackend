<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ItemsController extends BaseController
{
    public function list(){
        $customers = Customer::all();
        $customer = $customers->first();
        return view('internal.main',[
            'customer'=>$customer
        ]);
    }

    public function items(){
        $items = Product::all();
        $product1 = $items->get(0);
        $product2 = $items->get(1);
        $product3 = $items->get(2);
        return view('internal.main', [
           'item1'=>$product1,
           'item2'=>$product2,
           'item3'=>$product3 
        ]);
    }
}
