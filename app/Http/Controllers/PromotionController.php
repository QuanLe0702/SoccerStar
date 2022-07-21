<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Http\Requests\PromotionRequest;
use App\Models\Product;
use App\Models\Product_Type;
use Illuminate\Http\Request;


class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('admin.promotion.index', ['promotions' => $promotions]);
    }
    public function create()
    {
        $product = Product::all();
        $type = Product_Type::all();
        return view('admin.promotion.create', ['product' => $product, 'type' => $type]);
    }
    public function postCreate(Request $request)
    {
        $promotion = $request->all();
        $p = new Promotion($promotion);
        $p->save();
        return redirect()->route('promotion.index');
    }
    public function update($promotion_id)
    {
        $pm = Promotion::find($promotion_id);
        $product = Product::all();
        $type = Product_Type::all();
        return view('admin.promotion.update', ['pm' => $pm, 'product' => $product, 'type' => $type]);
    }
    public function postUpdate(PromotionRequest $request, $promotion_id)
    {
        $promotion = $request->all();
        $pm = Promotion::find($promotion_id);
        $pm->promotion_name = $promotion['promotion_name'];
        $pm->promotion_type = $promotion['promotion_type'];
        $pm->promotion_time_start = $promotion['promotion_time_start'];
        $pm->promotion_time_end = $promotion['promotion_time_end'];
        $pm->product_id = $promotion['product_id'];
        $pm->product_type_id = $promotion['product_type_id'];
        $pm->promotion_value = $promotion['promotion_value'];
        $pm->save();
        return redirect()->route('promotion.index');
    }
    public function delete($promotion_id)
    {
        $p = Promotion::find($promotion_id);
        $p->delete();
        return redirect()->route('promotion.index');
    }
    public function details($promotion_id)
    {
        $pm = Promotion::find($promotion_id);
        $product = Product::all();
        $type = Product_Type::all();
        return view('admin.promotion.details', ['pm' => $pm, 'product' => $product, 'type' => $type]);
    }
}
