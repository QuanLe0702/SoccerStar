<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Comment;
use App\Models\Product_Type;
use App\Models\Slider;
use App\Models\Promotion;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }
    public function create()
    {
        $product_type = Product_Type::all();
        $brand = Brand::all();
        return view('admin.product.create',['product_type'=>$product_type,'brand'=>$brand]);
    }
    public function postCreate(ProductRequest $request)
    {
        $product = $request->all();
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $imageName = null;
        }
        $p = new Product($product);
        $p->product_image = $imageName;
        $p->save();

        return redirect()->route('product.index');
    }
    public function update($product_id)
    {
        $p = Product::find($product_id);
        $brand = Brand::all();
        $product_type = Product_Type::all();
        return view('admin.product.update', ['p' => $p,'product_type'=>$product_type,'brand'=>$brand]);
    }
    public function postUpdate(Request $request, $product_id)
    {
        $product = $request->all();
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $p = Product::find($product_id);
            $imageName = $p->product_image;
        }
        $p = Product::find($product_id)->first();
        $p->product_name = $product['product_name'];
        $p->product_price = $product['product_price'];
        $p->product_description = $product['product_description'];
        $p->product_image = $imageName;
        $p->product_highlight = $product['product_highlight'];
        $p->product_date = $product['product_date'];
        $p->product_type_id = $product['product_type_id'];
        $p->brand_id = $product['brand_id'];
        $p->save();
        return redirect()->route('product.index');
    }
    public function delete($product_id)
    {
        $p = Promotion::where('product_id','=',$product_id)->delete();
        $p = Comment::where('product_id','=',$product_id)->delete();
        $p = Product::find($product_id);
        $p->delete();
        return redirect()->route('product.index');
    }
    public function details($product_id)
    {
        $details = Product::find($product_id);
        $slider = Slider::where('product_id','=',$product_id)->orderBy('numerical_order')->get();
        // promotion
        $promotion_product = Promotion::where('product_id', '=', $product_id)->first();
        return view('admin.product.details', ['details' => $details, 'slider' => $slider, 'p' => $promotion_product]);
    }
}
