<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_category;
use App\Models\Product;

use Storage;

class ProductSetup extends Controller
{
    public function categories(Request $request)
    {
        $categories = Product_category::all();
        return view('admin.categories', compact('categories'));

    }

    public function new_update_categories(Request $request)
    {
        try{
            if ($request->filled('delete')) {
                Product_category::where([
                    'category_code' => $request->input('category_code'),
                ])
                ->delete();

                return redirect()->back()->with('success','Successfully deleted category');
            } else {
                Product_category::updateOrCreate([
                    'category_code' => $request->input('category_code'),
                ],[
                    'description' => $request->input('description'),
                ]);
                return redirect()->back()->with('success','Successful');
            }
        }
        catch(Exception $e){
            // dd($e);
            return redirect()->back()->with('error','Operation on categories failed');
            Log::error($e->getMessage());
        }
    }

    public function products_mgt(Request $request)
    {
        $categories = Product_category::all();
        $products = Product::all();
        return view('admin.manage_products',[
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function new_products(Request $request)
    {
        $product_id = (int)(Product::max('product_id')) +1;
        $image = $request->file('product_image');
        $file_path = $image->storeAs('public/files/product_images',$product_id);
        $public_path = Storage::url($file_path);

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_category = $request->product_category;
        $product->image = $public_path;
        $product->initial_price = $request->initial_price;
        $product->selling_price = $request->selling_price;

        $product->save();
        return redirect()->back()->with('success','Product saved');
    }
}
