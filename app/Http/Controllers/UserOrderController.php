<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Session;

class UserOrderController extends Controller
{
    public function index()
    {
        if (Session::has('customer_id')) {
            $p = Session::get('customer_id');
        }
        $orders = Order::where('customer_id', '=', $p)->get();
        return view('user.pages.userorder', ['orders' => $orders]);
  
    }
}
