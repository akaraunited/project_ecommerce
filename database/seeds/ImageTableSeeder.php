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
                'location'        => '/test/1.jpg',
            ],
            [
                'product_id' => Product::findOrFail(1)->id,
                'location'        => '/test/2.jpg',
            ],
            [
                'product_id' => Product::findOrFail(1)->id,
                'location'        => '/test/3.jpg',
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
