<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;

class MessageController extends BaseController
{
    /**
     * @param  Request  $request
     */
    public function send(Request $request){
        $message = new Contact();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->phoneNumber = $request->input('phone');
        $message->message = $request->input('msg');
        $message->save();
        return \redirect()->back()->with('sent',1);
    }
}
