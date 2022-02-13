<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Contact;
use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;

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
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
        } else {
            $cart = 0;
        }
        $items = Product::all();
        return view('internal.main', [
            'product1'=>$items->first(),
            'product2'=>$items->last(),
            'cart' => $cart
        ]);
    }

    public function cart(){
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
            $items = Product::all();
            return view('internal.cart', [
                'product1'=>$items->first(),
                'product2'=>$items->last(),
                'cart' => $cart
            ]);
        } else {
            return Redirect::to('/login');
        }
    }

    public function addToBasket($id){
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
            if($id=='table1'){
                $cart->customerID = $customerID;
                $cart->item1Quantity = $cart->item1Quantity+1;
                $cart->item2Quantity = $cart->item2Quantity;
                $cart->save();
            } else if($id=='table2'){
                $cart->customerID = $customerID;
                $cart->item1Quantity = $cart->item1Quantity;
                $cart->item2Quantity = $cart->item2Quantity+1;
                $cart->save();
            }
            $items = Product::all();
            return Redirect::to('/');
        } else {
            return Redirect::to('/login');
        }
    }

    public function item1Add(){
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
            $cart->customerID = $customerID;
            $cart->item1Quantity = $cart->item1Quantity+1;
            $cart->item2Quantity = $cart->item2Quantity;
            $cart->save();
            return Redirect::back();
        } else {
            return Redirect::to('/login');
        }
    }
    public function item1Rem(){
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
            $cart->customerID = $customerID;
            $cart->item1Quantity = $cart->item1Quantity-1;
            $cart->item2Quantity = $cart->item2Quantity;
            $cart->save();
            return Redirect::back();
        } else {
            return Redirect::to('/login');
        }
    }
    public function item2Add(){
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
            $cart->customerID = $customerID;
            $cart->item1Quantity = $cart->item1Quantity;
            $cart->item2Quantity = $cart->item2Quantity+1;
            $cart->save();
            return Redirect::back();
        } else {
            return Redirect::to('/login');
        }
    }
    public function item2Rem(){
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
            $cart->customerID = $customerID;
            $cart->item1Quantity = $cart->item1Quantity;
            $cart->item2Quantity = $cart->item2Quantity-1;
            $cart->save();
            return Redirect::back();
        } else {
            return Redirect::to('/login');
        }
    }
}
