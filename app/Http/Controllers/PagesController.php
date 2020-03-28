<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductCategory;
use Symfony\Component\Console\Input\Input;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home', ['active' => 'home']);
    }
    public function about()
    {
        return view('pages.about', ['active' => 'about']);
    }

    public function products(Request $request, $category = null)
    {
        $search = $request->search;
        if ($category) {
            $products = Product::where([['category_id', '=', $category], ['name', 'like', "%$search%"]])->get()->sortBy('name');
        } else {
            $products = Product::where('name', 'like', "%$search%")->get()->sortBy('name')->sortBy('category_id');
        }
        $category = ProductCategory::all()->sortBy('id');
        $data = array('products' => $products, 'category' => $category, 'active' => 'product');
        return view('pages.products', $data);
    }

    public function getProduct($id)
    {
        $product = Product::with('details')->where('id', $id)->get();
        return json_encode($product);
    }
}
