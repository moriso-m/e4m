<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_category;

class ProductMgt extends Controller
{
    public function categories(Request $request)
    {
        $categories = Product_category::all();
        return view('categories', compact('categories'));

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
                    'wholesale_id' => Auth::user()->username,
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
        return view('manage_products',[
            'categories' => $categories,
        ]);
    }

    public function new_products(Request $request)
    {
        $product = new Product;

    }
}
