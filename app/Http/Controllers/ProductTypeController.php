<?php

namespace App\Http\Controllers;

use App\Models\Product_Type;
use App\Http\Requests\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $product_types = Product_Type::all();
        return view('admin.product_type.index', ['product_types' => $product_types]);
    }
    public function create()
    {
        return view('admin.product_type.create');
    }
    public function postCreate(ProductType $request)
    {
        $product_type = $request->all();
        $p = new Product_Type($product_type);
        $p->save();
        return redirect()->route('productType.index');
    }
    public function update($product_type_id)
    {
        $p = Product_Type::find($product_type_id);
        return view('admin.product_type.update', ['p' => $p]);
    }
    public function postUpdate(Request $request, $product_type_id)
    {
        $product_type = $request->all();
        $p = Product_Type::find($product_type_id);
        $p->product_type_name = $product_type['product_type_name'];
        $p->save();
        return redirect()->route('productType.index');
    }
    public function delete($product_type_id)
    {
        $p = Product_Type::find($product_type_id);
        $p->delete();
        return redirect()->route('productType.index');
    }
}
