<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Customer;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;

class CustomersController extends BaseController
{
    public function list(Request $request){
        if(isset($_COOKIE['sessionID'])) {
            $customer = Customer::where('sessionID', $_COOKIE['sessionID'])->first();
            $customerID = $customer->id;
            $cart = Cart::where('customerID', $customerID)->first();
            return view('internal.account', [
                'customer' => $customer,
                'cart' => $cart
            ]);
        } else {
            return Redirect::to('/login');
        }
    }

    public function setSession(Request $request){
        setcookie('sessionID',csrf_token(),0);
        echo csrf_token();
    }

    public function loginIndex(Request $request){
        if(!isset($_COOKIE['sessionID'])) {
            $cart = 0;
            return view('internal.login', [
                'cart' => $cart
            ]);
        } else {
            return Redirect::to('/account');
        }
    }

    public function registerIndex(Request $request){
        if(!isset($_COOKIE['sessionID'])) {
            $cart = 0;
            return view('internal.register', [
                'cart' => $cart
            ]);
        } else {
            return Redirect::to('/account');
        }
    }

    public function registerUser(Request $request){
        if($request->input('password')==$request->input('passwordVerify')){
            $customer = new Customer();
            $customer->firstName = $request->input('firstName');
            $customer->lastName = $request->input('lastName');
            $customer->email = $request->input('email');
            $customer->password = password_hash($request->input('password'),PASSWORD_BCRYPT);
            $customer->sessionID = "";
            $customer->save();
            return Redirect::to('/login')->with('regSuccess',1);
        }
    }

    public function loginCheck(Request $request){
        $customer = Customer::where('email',$request->input('email'))->first();
        if($customer){
            if(password_verify($request->input('password'),$customer->password)){
                setcookie('sessionID',csrf_token(),0);
                $customer->sessionID = csrf_token();
                $customer->save();
                return Redirect::to('/account');
            } else {
                return \redirect()->back()->with('loginError',2);
            }
        } else {
            return \redirect()->back()->with('loginError',1);
        }
    }

    public function logout(Request $request){
        if(isset($_COOKIE['sessionID'])){
            $customer = Customer::where('sessionID',$_COOKIE['sessionID'])->first();
            $customer->sessionID="";
            $customer->save();
            unset($_COOKIE['sessionID']);
            setcookie('sessionID',null,-1,'/');
            return Redirect::to('/');
        } else {
            return Redirect::to('/');
        }
    }
}
