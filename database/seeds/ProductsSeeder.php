<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'name'=> 'Chicken',
            'slug'=> 'chicken',
            'description'=> 'chicken with curry',
            'calories'=> '555',
            'proteins'=> '26',
            'fat'=> '5',
            'carbs'=> '14',
            'price'=> '12',
            'image1'=> 'chicken',
            'image2'=> 'chicken',
//            'category_id' => 1
                    ]);

        Product::create([

            'name'=> 'Rice',
            'slug'=> 'rice',
            'description'=> 'rice with curry',
            'calories'=> '655',
            'proteins'=> '22',
            'fat'=> '2',
            'carbs'=> '18',
            'price'=> '11',
            'image1'=> 'chicken',
            'image2'=> 'chicken',
        ]);


    }
}
