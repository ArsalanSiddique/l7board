<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profile extends Model
{
    use SoftDeletes;
    protected $fillable = ["user_id", "phone", "photo", "gender", "country", "city"];
}
