<?php

use App\Image;
use App\Product;
use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=[
            [
                'product_id' => Product::findOrFail(1)->id,
                'location'        => '/test/m1.jpg',
            ],
            [
                'product_id' => Product::findOrFail(1)->id,
                'location'        => '/test/m2.jpg',
            ],
            [
                'product_id' => Product::findOrFail(1)->id,
                'location'        => '/test/m3.jpg',
            ],
            [
                'product_id' => Product::findOrFail(2)->id,
                'location'        => '/test/m3.jpg',
            ],
         ];
foreach($images as $image){
    Image::create([
        'product_id' => $image['product_id'],
        'location'   => $image['location'],
]);
}
    }
}

