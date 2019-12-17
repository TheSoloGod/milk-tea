<?php

use Illuminate\Database\Seeder;
use App\ProductStore;

class ProductStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productStore = new ProductStore();
        $productStore->store_id = '1';
        $productStore->product_id = '1';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '1';
        $productStore->product_id = '2';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '2';
        $productStore->product_id = '2';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '1';
        $productStore->product_id = '3';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '3';
        $productStore->product_id = '3';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '1';
        $productStore->product_id = '1';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '3';
        $productStore->product_id = '1';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '3';
        $productStore->product_id = '5';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '1';
        $productStore->product_id = '4';
        $productStore->save();

        $productStore = new ProductStore();
        $productStore->store_id = '2';
        $productStore->product_id = '5';
        $productStore->save();
    }
}
