<?php

use Illuminate\Database\Seeder;
use App\Topping;

class ToppingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topping = new Topping();
        $topping->name = 'milk foam';
        $topping->save();

        $topping = new Topping();
        $topping->name = 'pearl';
        $topping->save();

        $topping = new Topping();
        $topping->name = 'white pearl';
        $topping->save();

        $topping = new Topping();
        $topping->name = 'aloe';
        $topping->save();
    }
}
