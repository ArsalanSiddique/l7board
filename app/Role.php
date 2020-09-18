<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes;
    protected $fillable =  ["title"];
    

    public function setTitleAttribute($title) {
        $this->attributes["title"] = strtolower($title);
    }
}
