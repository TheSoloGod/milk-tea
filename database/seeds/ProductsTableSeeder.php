<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Royal Milk Tea';
        $product->price = '4.8';
        $product->save();

        $product = new Product();
        $product->name = 'Green Milk Tea';
        $product->price = '4.6';
        $product->save();

        $product = new Product();
        $product->name = 'Oolong Milk Tea';
        $product->price = '5.1';
        $product->save();

        $product = new Product();
        $product->name = 'Blueberry Milk Tea';
        $product->price = '5.1';
        $product->save();

        $product = new Product();
        $product->name = 'Mango Milk Tea';
        $product->price = '5.1';
        $product->save();
    }
}
