<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table categories');
        DB::table('categories')->insert([
            ['name'=>'Ноутбуки и компьютеры', 'parent_id'=>'0', 'img'=>''],
            ['name'=>'Смартфоны, ТВ и электроника', 'parent_id'=>'0', 'img'=>''],
            ['name'=>'Товары для геймеров', 'parent_id'=>'0', 'img'=>''],
            ['name'=>'Бытовая техника', 'parent_id'=>'0', 'img'=>''],
            ['name'=>'Товары для дома', 'parent_id'=>'0', 'img'=>''],
        ]);
        //
    }
}
