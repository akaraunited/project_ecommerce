<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function image(){
        return $this->hasMany(Image::class);  
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
