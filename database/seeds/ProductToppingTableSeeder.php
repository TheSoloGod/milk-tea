<?php

use Illuminate\Database\Seeder;
use App\ProductTopping;

class ProductToppingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productTopping = new ProductTopping();
        $productTopping->product_id = '1';
        $productTopping->topping_id = '1';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '1';
        $productTopping->topping_id = '3';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '2';
        $productTopping->topping_id = '2';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '3';
        $productTopping->topping_id = '1';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '3';
        $productTopping->topping_id = '2';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '4';
        $productTopping->topping_id = '1';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '4';
        $productTopping->topping_id = '2';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '5';
        $productTopping->topping_id = '2';
        $productTopping->save();

        $productTopping = new ProductTopping();
        $productTopping->product_id = '5';
        $productTopping->topping_id = '4';
        $productTopping->save();
    }
}
