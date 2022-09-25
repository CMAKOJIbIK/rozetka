<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table catalogs');
        DB::table('catalogs')->insert([

            ['parent_id' => '', 'category_parent_id' => 'Ноутбуки', 'img' => 'fa-solid fa-laptop', 'name' => 'Ноутбуки и компьютеры' ],
            ['parent_id' => '', 'category_parent_id' => 'Мобильные телефоны', 'img' => 'fa-solid fa-mobile-screen-button', 'name' => 'Смартфоны, ТВ и электроника'],



        ]);
        //
    }
}
