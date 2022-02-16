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
        $ciastko = "";
        if(!isset($_COOKIE['sessionID'])){
            setcookie('sessionID',csrf_token(), time()+(86400*30));
            $ciastko = csrf_token();
        } else {
            $ciastko = $_COOKIE['sessionID'];
        }

        $carts = Cart::all();
        $items = array();
        $itQua = array();
        foreach($carts as $cart) {
            if ($cart->sessionID == $ciastko) {
                $items[] = Product::where('id', $cart->itemID)->first();
                $itQua[] = $cart->itemQuantity;
            } else {
                $cart = 0;
            }
        }
        return view('internal.main',[
            'items'=>$items,
            'itemsQuantity'=>$itQua,
            'cart'=>$cart
        ]);
    }

    public function cart(){
        $ciastko = "";
        if(!isset($_COOKIE['sessionID'])){
            setcookie('sessionID',csrf_token(), time()+(86400*30));
            $ciastko = csrf_token();
        } else {
            $ciastko = $_COOKIE['sessionID'];
        }

        $carts = Cart::all();
        $items = array();
        $itQua = array();
        foreach($carts as $cart) {
            if ($cart->sessionID == $ciastko) {
                $items[] = Product::where('id', $cart->itemID)->first();
                $itQua[] = $cart->itemQuantity;
            } else {
                $cart = 0;
            }
        }
        return view('internal.cart',[
            'items'=>$items,
            'itemsQuantity'=>$itQua,
            'cart'=>$cart
        ]);
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function addToCart($id){
        $ciastko = "";
        if(!isset($_COOKIE['sessionID'])){
            setcookie('sessionID',csrf_token(), time()+(86400*30));
            $ciastko = csrf_token();
        } else {
            $ciastko = $_COOKIE['sessionID'];
        }

        $cart = Cart::where('sessionID',$ciastko)
            ->where('itemID',$id)->first();
        if($cart) {
            $cart->itemQuantity = $cart->itemQuantity+1;
            $cart->save();
        } else {
            $cartID = $this->generateRandomString();
            $customer = Customer::where('sessionID', $ciastko)->first();
            $cart=new Cart();
            if($customer) {
                $cart->customerID = $customer->id;
            }
            $cart->sessionID = csrf_token();
            $cart->cartID = $cartID;
            $cart->itemID = $id;
            $cart->itemQuantity = 1;
            $cart->save();
        }
        return Redirect::back();
    }
    public function remFromCart($id){
        $ciastko = "";
        if(!isset($_COOKIE['sessionID'])){
            setcookie('sessionID',csrf_token(), time()+(86400*30));
            $ciastko = csrf_token();
        } else {
            $ciastko = $_COOKIE['sessionID'];
        }

        $cart = Cart::where('sessionID',$ciastko)
            ->where('itemID',$id)->first();
        if($cart) {
            if($cart->itemQuantity>0) {
                $cart->itemQuantity = $cart->itemQuantity - 1;
                $cart->save();
            }
        } else {
            return Redirect::back()->with('cantRemove',1);
        }
        return Redirect::back();
    }
}
