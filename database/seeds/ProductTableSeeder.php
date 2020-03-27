<?php

use App\Category;
use App\Image;
use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

    Product::create([
        'category_id' => Category::findOrFail(1)->id,
        'name'        => 'teasting',
        'price'        => 'justing',
        'description'   => 'description',
     ]);



    }
}
