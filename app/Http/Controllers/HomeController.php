<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function listProduct()
    {
        $products = Product::orderBy("id", "DESC")->paginate(8);
        return view('frontend.home', compact('products'));
    }

    public function searchProduct(Request $request)
    {
        $products = Product::orderBy("id", "DESC")->where('name', 'LIKE', '%'.$request->key_word.'%')->get();
        return view('frontend.search-product', compact('products'));
    }
}
