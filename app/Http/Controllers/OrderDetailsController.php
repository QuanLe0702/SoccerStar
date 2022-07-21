<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\OrderDetailRequest;
use App\Models\OrderDetail;
class OrderDetailsController extends Controller
{
    public function index()
    {
        $orderdetails = OrderDetail::all();
        return view('admin.orderdetails.index')->with(['orderdetails' => $orderdetails]);
    }

    public function delete($orderDetail_id)
    {
        $p = OrderDetail::find($orderDetail_id);
        $p->delete();
        return redirect()->route('orderdetails.index');
    }

    public function update($orderDetail_id)
    {
        $p = OrderDetail::find($orderDetail_id);
        return view('admin.orderdetails.update', ['p' => $p]);
    }
    public function postUpdate(Request $request, $orderDetail_id)
    {
        $orderdetails = $request->all();

        $p = OrderDetail::find($orderDetail_id);
        $p->orderDetail_quantity = $orderdetails['orderDetail_quantity'];
        $p->orderDetail_price = $orderdetails['orderDetail_price'];
        $p->product_size = $orderdetails['product_size'];
        $p->order_id  = $orderdetails['order_id'];
        $p->product_id   = $orderdetails['product_id'];


        $p->save();
        return redirect()->route('orderdetails.index');
    }

}
