<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Image(){
        return $this->hasMany(Image::class);  
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
