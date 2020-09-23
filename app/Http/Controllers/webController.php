<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class webController extends Controller
{
    public function index()
    {
        $sliders = Product::Orderby('ID', 'DESC')->limit(3)->get();
        $featured_products = Product::Orderby('ID', 'DESC')->limit(16)->get();
        $top_best_seller = Product::Orderby('ID', 'DESC')->limit(1)->first();
        $best_sellers = Product::Orderby('ID', 'DESC')->limit(6)->get();
        $special_offers = Product::Orderby('ID', 'DESC')->limit(3)->get();
        $top_rated = Product::Orderby('ID', 'DESC')->limit(12)->get();
        $new_arrivals = Product::Orderby('ID', 'DESC')->limit(16)->get();
        return view('welcome', compact(["sliders", "featured_products", "top_best_seller", "best_sellers", "top_rated", "special_offers", "new_arrivals"]));
    }

    public function singleProductShow(Product $product)
    {
        $related_products = Category::find($product->category_id)->products->except($product->id);
        return view("single-product", compact(["product", "related_products"]));
    }
}
