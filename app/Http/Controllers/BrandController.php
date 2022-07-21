<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', ['brands' => $brands]);
    }
    public function create()
    {
        return view('admin.brand.create');
    }
    public function postCreate(BrandRequest $request)
    {
        $brand = $request->all();
        if ($request->hasFile('brand_logo')) {
            $file = $request->file('brand_logo');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $imageName = null;
        }
        $p = new Brand($brand);
        $p->brand_logo = $imageName;
        $p->save();
        return redirect()->route('brand.index');
    }
    public function update($id)
    {
        $p = Brand::find($id);
        return view('admin.brand.update', ['p' => $p]);
    }
    public function postUpdate(Request $request, $id)
    {
        $brand = $request->all();
        if ($request->hasFile('brand_logo')) {
            $file = $request->file('brand_logo');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $p = Brand::find($id);
            $imageName = $p->image;
        }
        $p = Brand::find($id);
        $p->brand_name = $brand['brand_name'];
        $p->brand_logo = $imageName;
        $p->save();
        return redirect()->route('brand.index');
    }
    public function delete($brand_id)
    {
        $p = Brand::find($brand_id);
        $p->delete();
        return redirect()->route('brand.index');
    }
}
