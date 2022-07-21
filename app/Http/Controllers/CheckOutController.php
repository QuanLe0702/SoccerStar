<?php

namespace App\Http\Controllers;
use App\http\Requests\CheckOutRequest;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    public function create()
    {
        return view('user/pages/checkout');
    }
    public function postCreate(CheckOutRequest $request)
    {
        $customer_name = $request->customer_name;
        $customer_telephone = $request->customer_telephone;
        $customer_address = $request->customer_address;
        $customer_mail = $request->customer_mail;
        $order_note = $request->order_note;
        if(Session::has('customer_id')){
            $customer_id  =  Session::get('customer_id');
           }else{
            //$customer_id  = null;
            return redirect()->route('customer.login');
           }
        $p = new Order();
        $p->customer_name = $customer_name;
        $p->customer_telephone = $customer_telephone;
        $p->customer_address = $customer_address;
        $p->customer_mail = $customer_mail;
        $p->order_note = $order_note;
        $p->customer_id = $customer_id;

        $p->save();
        return redirect()->route('customer.home');
    }
}
