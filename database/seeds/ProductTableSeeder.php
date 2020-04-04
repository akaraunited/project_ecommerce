<?php

use App\Category;
use App\Image;
use App\Product;
use App\User;
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
        
      $user = User::first();
    Product::create([
       'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(1)->id,
        'image' => '/test/m1.jpg',
        'name'        => 'teasting',
        'price'        => '250$',
        'description'   => 'description',
     ]);
     Product::create([
      'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(1)->id,
        'image' => '/test/m2.jpg',
        'name'        => 'Justing 2',
        'price'        => '300$',
        'description'   => 'description',
     ]);
     Product::create([
      'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(1)->id,
        'image' => '/test/m2.jpg',
        'name'        => 'Justing 2',
        'price'        => '300$',
        'description'   => 'description',
     ]);
     Product::create([
      'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(1)->id,
        'image' => '/test/m2.jpg',
        'name'        => 'Justing 2',
        'price'        => '300$',
        'description'   => 'description',
     ]);


     Product::create([
      'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(2)->id,
        'image' => '/test/mk4.jpg',
        'name'        => 'Testing Oils',
        'price'        => '250$',
        'description'   => 'description',
     ]);
     Product::create([
      'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(2)->id,
        'image' => '/test/mk4.jpg',
        'name'        => 'Testing Oils',
        'price'        => '250$',
        'description'   => 'description',
     ]);
     Product::create([
      'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(2)->id,
        'image' => '/test/mk7.jpg',
        'name'        => 'Testing Oils',
        'price'        => '250$',
        'description'   => 'description',
     ]);

 
     Product::create([
      'user_id' =>  $user->id,
        'category_id' => Category::findOrFail(3)->id,
        'image' => '/test/mk7.jpg',
        'name'        => 'Testing Pastas',
        'price'        => '250$',
        'description'   => 'description',
     ]);



    }
}
