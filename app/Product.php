<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ["category_id", "name", "price", "details", "photo", "material", "specification", "weight", "brand_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function relatedProducts()
    {
        return $this->hasMany(Product::class, Category::class);
    }


    public static function product_stock($product_id)
    {
        $stocks = Stock::where("product_id", $product_id)->get();
        $quantity = 0;
        foreach ($stocks as $stock) {
            $quantity += $stock["quantity"];
        }

        return $quantity;
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
