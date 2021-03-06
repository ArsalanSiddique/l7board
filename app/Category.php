<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use SoftDeletes;

    protected $fillable = ['name'];

    public function products() {
        return $this->hasMany(Product::class, "category_id", "id");
    }
}
