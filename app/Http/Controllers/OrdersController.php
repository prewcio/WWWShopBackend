<?php

namespace App\Http\Controllers;

use App\Customer;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OrdersController extends BaseController
{
    public function list(){
        $customers = Customer::all();
        $customer = $customers->first();
        return view('internal.account',[
            'customer'=>$customer
        ]);
    }
}
