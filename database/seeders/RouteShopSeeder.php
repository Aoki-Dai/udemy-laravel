<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('route_shop')->insert([
            [ 'route_id' => 1, 'shop_id' => 1 ],
            [ 'route_id' => 1, 'shop_id' => 2 ],
            [ 'route_id' => 2, 'shop_id' => 1 ],
        ]);
    }
}
