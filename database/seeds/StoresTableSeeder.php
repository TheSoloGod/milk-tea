<?php

use Illuminate\Database\Seeder;
use App\Store;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new Store();
        $store->name = 'Ding Tea';
        $store->save();

        $store = new Store();
        $store->name = 'Tocotoco';
        $store->save();

        $store = new Store();
        $store->name = 'Gongcha';
        $store->save();

        $store = new Store();
        $store->name = 'LeeTee';
        $store->save();
    }
}
