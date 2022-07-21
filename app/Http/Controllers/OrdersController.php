<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index')->with(['orders' => $orders]);
    }
    public function update($order_id)
    {
        $p = Order::find($order_id);
        return view('admin.orders.update', ['p' => $p]);
    }
    public function postUpdate(Request $request, $order_id)
    {
        $orders = $request->all();
        $p = Order::find($order_id);

        $p->order_date = $orders['order_date'];
        $p->order_status = $orders['order_status'];
        $p->order_note = $orders['order_note'];
        $p->customer_telephone = $orders['customer_telephone'];
        $p->customer_name = $orders['customer_name'];
        $p->customer_address = $orders['customer_address'];
        $p->customer_mail = $orders['customer_mail'];
        $p->save();
        return redirect()->route('orders.index');
    }
    public function delete($order_id)
    {
        $p = Order::find($order_id);
        $p->delete();
        return redirect()->route('orders.index');
    }
    public function details($orders_id)
    {
        $p = Order::find($orders_id);
        return view('admin.orders.details', ['p' => $p]);
    }
}
