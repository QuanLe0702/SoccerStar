<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\SliderRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', ['sliders' => $sliders]);
    }
    public function create()
    {
        $product = Product::all();
        return view('admin.slider.create',['product'=>$product]);
    }
    public function postCreate(SliderRequest $request)
    {
        $slider = $request->all();
        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $imageName = null;
        }
        $p = new Slider($slider);
        $p->slider_image = $imageName;
        $p->save();
        return redirect()->route('slider.index');
    }
    public function update($slider_id)
    {
        $p = Slider::find($slider_id);
        $product = Product::all();
        return view('admin.slider.update', ['p' => $p,'product'=>$product]);
    }
    public function postUpdate(Request $request, $slider_id)
    {
        $slider = $request->all();
        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $p = Slider::find($slider_id);
            $imageName = $p->slider_image;
        }
        $p = Slider::find($slider_id);
        $p->slider_image = $imageName;
        $p->product_id = $slider['product_id'];
        $p->numerical_order = $slider['numerical_order'];
        $p->save();
        return redirect()->route('slider.index');
    }
    public function delete($slider_id)
    {
        $p = Slider::find($slider_id);
        $p->delete();
        return redirect()->route('slider.index');
    }
}
