<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table carts');
        DB::table('carts')->insert([

            ['parent_id' => 1, 'product_id' => 1, 'count' => 3],
            ['parent_id' => 1, 'product_id' => 2, 'count' => 1],
            ['parent_id' => 2, 'product_id' => 1, 'count' => 1],
            ['parent_id' => 2, 'product_id' => 3, 'count' => 2],
            ['parent_id' => 2, 'product_id' => 5, 'count' => 2],
            ['parent_id' => 3, 'product_id' => 3, 'count' => 2],
            ['parent_id' => 3, 'product_id' => 1, 'count' => 2],
            ['parent_id' => 3, 'product_id' => 4, 'count' => 2],
            ['parent_id' => 3, 'product_id' => 2, 'count' => 2],



        ]);
        //
    }
}
