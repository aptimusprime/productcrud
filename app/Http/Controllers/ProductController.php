<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
  
    public function index()
    {
        $products = Product::all();
      return view ('products.index',compact('products'));
    }

   
    public function create()
    {
        return view('products.create');
    }

    
    public function store(Request $request)
    {
        $products = new Product;
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/', $filename);
            $products->product_image = $filename;
        }
        $products->save();
        return redirect()->back()->with('status','Product Added Successfully');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $products = Product::find($id);
        return view('products.edit', compact('products'));
    }

   
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->input('name');
        $products->price = $request->input('price');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/product/'.$products->product_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/', $filename);
            $products->product_image = $filename;
        }
        $products->update();
        return redirect()->back()->with('status','Product Updated Successfully');
    }

    
    public function destroy($id)
    {
        $products = Product::find($id);
        $destination = 'uploads/product/'.$products->product_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $products->delete();
        return redirect()->back()->with('status','Product Deleted Successfully');
    }
}
