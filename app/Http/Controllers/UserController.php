<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\Comment;
use App\Models\Product_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function home()
    {

        return view('user.pages.home');
    }
    public function product()
    {
        $product = Product::all();
        $brand = Brand::all();
        $category = Product_Type::all();
        if(isset($_GET['sortby'])){
            $sort_by = $_GET['sortby'];
            if($sort_by=='name_desc'){
                $product= Product::orderBy('product_name','desc')->get();
            }
            elseif($sort_by=='name_asc'){
                $product = Product::orderBy('product_name','asc')->get();
            }elseif($sort_by=='price_desc'){
                $product = Product::orderBy('product_price','desc')->get();
            }elseif($sort_by=='price_asc'){
                $product = Product::orderBy('product_price','asc')->get();
            }elseif($sort_by=='highlight'){
                $product = Product::where('product_highlight','=',1)->get();
            }elseif($sort_by=='new'){
                $product = Product::orderBy('product_date','desc')->get();
            }else{
                $product = Product::all();
            }

        }
        return view('user.pages.product', ['product' => $product, 'brand' => $brand,'category'=>$category]);
    }

    public function show_brand($id)
    {
        $brand = Brand::all();
        $category = Product_Type::all();
        $brand_name= Product::where('brand_id','=',$id)->get();
        if(isset($_GET['sortby'])){
            $sort_by = $_GET['sortby'];
            if($sort_by=='name_desc'){
                $brand_name= Product::where('brand_id','=',$id)->orderBy('product_name','desc')->get();
            }
            elseif($sort_by=='name_asc'){
                $brand_name = Product::where('brand_id','=',$id)->orderBy('product_name','asc')->get();
            }elseif($sort_by=='price_desc'){
                $brand_name = Product::where('brand_id','=',$id)->orderBy('product_price','desc')->get();
            }elseif($sort_by=='price_asc'){
                $brand_name = Product::where('brand_id','=',$id)->orderBy('product_price','asc')->get();
            }elseif($sort_by=='highlight'){
                $brand_name = Product::where('brand_id','=',$id)->where('product_highlight','=',1)->get();
            }elseif($sort_by=='new'){
                $brand_name = Product::where('brand_id','=',$id)->orderBy('product_date','desc')->get();
            }else{
                $brand_name = Product::all();
            }

        }
        return view('user.pages.show_brand',[ 'brand' => $brand,'category'=>$category,'brand_name'=>$brand_name]);
    }
    public function show_category($id)
    {
        $brand = Brand::all();
        $category = Product_Type::all();
        $category_name = Product::where('product_type_id','=',$id)->get();
        if(isset($_GET['sortby'])){
            $sort_by = $_GET['sortby'];
            if($sort_by=='name_desc'){
                $category_name= Product::where('product_type_id','=',$id)->orderBy('product_name','desc')->get();
            }
            elseif($sort_by=='name_asc'){
                $category_name = Product::where('product_type_id','=',$id)->orderBy('product_name','asc')->get();
            }elseif($sort_by=='price_desc'){
                $category_name = Product::where('product_type_id','=',$id)->orderBy('product_price','desc')->get();
            }elseif($sort_by=='price_asc'){
                $category_name = Product::where('product_type_id','=',$id)->orderBy('product_price','asc')->get();
            }elseif($sort_by=='highlight'){
                $category_name = Product::where('product_type_id','=',$id)->where('product_highlight','=',1)->get();
            }elseif($sort_by=='new'){
                $category_name = Product::where('product_type_id','=',$id)->orderBy('product_date','desc')->get();
            }else{
                $category_name = Product::all();
            }

        }
        return view('user.pages.show_category',['brand' => $brand,'category'=>$category,'category_name'=>$category_name]);
    }
public function phu_kien()
{
    $product_type = Product_Type::where('product_type_name','=','phụ kiện')->limit(1)->first()->id;
    $product = Product::where('product_type_id','=',$product_type)->get();    
    $brand = Brand::all();
    $category = Product_Type::all();
    if(isset($_GET['sortby'])){
        $sort_by = $_GET['sortby'];
        if($sort_by=='name_desc'){
            $product= Product::where('product_type_id','=',$product_type)->orderBy('product_name','desc')->get();
        }
        elseif($sort_by=='name_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_name','asc')->get();
        }elseif($sort_by=='price_desc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','desc')->get();
        }elseif($sort_by=='price_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','asc')->get();
        }else{
            $product = Product::where('product_type_id','=',$product_type)->get();
        }

    }
    return view('user.pages.product', ['product' => $product, 'brand' => $brand,'category'=>$category]);
}
public function giay_futsal()
{
    $product_type = Product_Type::where('product_type_name','=','giày futsal')->limit(1)->first()->id;
    $product = Product::where('product_type_id','=',$product_type)->get();
    $brand = Brand::all();
    $category = Product_Type::all();
    if(isset($_GET['sortby'])){
        $sort_by = $_GET['sortby'];
        if($sort_by=='name_desc'){
            $product= Product::where('product_type_id','=',$product_type)->orderBy('product_name','desc')->get();
        }
        elseif($sort_by=='name_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_name','asc')->get();
        }elseif($sort_by=='price_desc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','desc')->get();
        }elseif($sort_by=='price_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','asc')->get();
        }else{
            $product = Product::where('product_type_id','=',$product_type)->get();
        }

    }
    return view('user.pages.product', ['product' => $product, 'brand' => $brand,'category'=>$category]);
}
public function giay_co_tu_nhien()
{
    $product_type = Product_Type::where('product_type_name','=','giày cỏ tự nhiên')->limit(1)->first()->id;
    $product = Product::where('product_type_id','=',$product_type)->get();
    $brand = Brand::all();
    $category = Product_Type::all();
    if(isset($_GET['sortby'])){
        $sort_by = $_GET['sortby'];
        if($sort_by=='name_desc'){
            $product= Product::where('product_type_id','=',$product_type)->orderBy('product_name','desc')->get();
        }
        elseif($sort_by=='name_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_name','asc')->get();
        }elseif($sort_by=='price_desc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','desc')->get();
        }elseif($sort_by=='price_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','asc')->get();
        }else{
            $product = Product::where('product_type_id','=',$product_type)->get();
        }

    }
    return view('user.pages.product', ['product' => $product, 'brand' => $brand,'category'=>$category]);
}
public function giay_co_nhan_tao()
{
    $product_type = Product_Type::where('product_type_name','=','giày cỏ nhân tạo')->limit(1)->first()->id;
    $product = Product::where('product_type_id','=',$product_type)->get();
    $brand = Brand::all();
    $category = Product_Type::all();

    if(isset($_GET['sortby'])){
        $sort_by = $_GET['sortby'];
        if($sort_by=='name_desc'){
            $product= Product::where('product_type_id','=',$product_type)->orderBy('product_name','desc')->get();
        }
        elseif($sort_by=='name_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_name','asc')->get();
        }elseif($sort_by=='price_desc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','desc')->get();
        }elseif($sort_by=='price_asc'){
            $product = Product::where('product_type_id','=',$product_type)->orderBy('product_price','asc')->get();
        }else{
            $product = Product::where('product_type_id','=',$product_type)->get();
        }

    }
    return view('user.pages.product', ['product' => $product, 'brand' => $brand,'category'=>$category]);
}
    public function detailProduct($product_id)
    {
        $details = Product::find($product_id);
        $slider = Slider::where('product_id','=',$product_id)->orderBy('numerical_order')->get();
        $comment = Comment::where('product_id','=',$product_id)->get();
        return view('user.pages.detailProduct', ['details' => $details, 'slider' => $slider,'comment'=>$comment]);
    }
    public function comment(Request $request)
    {
        $comment = $request->all();
        if(Session::has('customer_id')){
            $customer = Session::get('customer_id');
        }else{
            $customer = null;
        }
        $comment_save = new Comment($comment);
        $comment_save->customer_id = $customer;
        $comment_save->save();

    }
    public function show_price($price)
    {
        $product = Product::all();
        if($price==1){
            $product = Product::whereBetween('product_price',[200000,500000])->get();
        }elseif($price==2){
            $product = Product::whereBetween('product_price',[500000,700000])->get();
        }elseif($price==3){
            $product = Product::whereBetween('product_price',[700000,1000000])->get();
        }elseif($price==4){
            $product = Product::whereBetween('product_price',[1000000,1500000])->get();
        }elseif($price==5){
            $product = Product::whereBetween('product_price',[1500000,2000000])->get();
        }
        $brand = Brand::all();
        $category = Product_Type::all();
        if(isset($_GET['sortby'])){
            $sort_by = $_GET['sortby'];
            if($sort_by=='name_desc'){
                $product= Product::orderBy('product_name','desc')->get();
            }
            elseif($sort_by=='name_asc'){
                $product = Product::orderBy('product_name','asc')->get();
            }elseif($sort_by=='price_desc'){
                $product = Product::orderBy('product_price','desc')->get();
            }elseif($sort_by=='price_asc'){
                $product = Product::orderBy('product_price','asc')->get();
            }elseif($sort_by=='highlight'){
                $product = Product::where('product_highlight','=',1)->get();
            }elseif($sort_by=='new'){
                $product = Product::orderBy('product_date','desc')->get();
            }else{
                $product = Product::all();
            }

        }
        return view('user.pages.product', ['product' => $product, 'brand' => $brand,'category'=>$category]);

    }
}
