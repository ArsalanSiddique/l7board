<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby("created_at", "desc")->paginate(10);
        return view("l7board.admin.products.products", compact(["products"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::All();
        return view("l7board.admin.products.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {

        $rand_number = rand(100000, 999999);

        if ($request->hasFile('photo')) {
            $fileName = $request->photo->getClientOriginalName();
            $unique_filename = "products/" . ($rand_number . "_" . $fileName);
            $request->photo->storeAs("images", $unique_filename, 'public');
        }
        Product::create([
            "category_id" => $request->category_id,
            "name" => $request->name,
            "details" => $request->details,
            "price" => $request->price,
            "photo" => $unique_filename,
        ]);

        return back()->with(["message" => "Product added successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::find($product->id);
        return view("l7board.admin.products.show", compact(["product"]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::find($product->id);
        $categories = Category::All();
        return view("l7board.admin.products.edit", compact(["product", "categories"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        $product = Product::find($product->id);
        if ($request->hasFile('photo')) {

            unlink(public_path('/storage/images/' . $product->photo));
            // Storage::delete('/storage/images/' . $product->photo);

            $rand_number = rand(100000, 999999);
            $fileName = $request->photo->getClientOriginalName();
            $unique_filename = "products/" . ($rand_number . "_" . $fileName);
            $request->photo->storeAs("images", $unique_filename, 'public');

            $product->update([
                "category_id" => $request->category_id,
                "name" => $request->name,
                "details" => $request->details,
                "price" => $request->price,
                "photo" => $unique_filename,
            ]);
        } else {
            $product->update([
                "category_id" => $request->category_id,
                "name" => $request->name,
                "details" => $request->details,
                "price" => $request->price,
            ]);
        }


        return back()->with(["message" => "Product updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        unlink(public_path('/storage/images/' . $product->photo));
        Product::find($product->id)->delete();
        return back()->with(["message" => "Product Deleted Successfully"]);
    }
}
