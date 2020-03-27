<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Product(){
        return $this->hasOne(Product::class);
    }
}
