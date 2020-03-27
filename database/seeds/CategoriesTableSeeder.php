<?php

use App\Category;
use App\Image;
use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// Category
        $Catetories=[
            [
                'name'   =>'Hotels'
            ],
            [
                'name'   => 'Resturant',
            ],
            [
                'name'   => 'Events',
            ]
            ];
            // $user =User::create([
            //     'name'=>'Phov Thea',
            //     'email'=>'phovthea@gmail.com',
            //     'password'=>bcrypt('12345678'),
            //   ]);
              
     foreach($Catetories as $category)   {
        $category=Category::create([
              'name'=> $category['name'],
            ]);
     }
        



    }
}
