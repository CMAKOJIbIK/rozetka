<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table products');
        DB::table('products')->insert([

            ['count_status' => 2,'code' => '314908303', 'stars' => 4, 'category_id' => 1, 'vendor_id' => 1, 'img' => 'https://content2.rozetka.com.ua/goods/images/big/260636960.jpg', 'description' => 'Мотоперчатки кожаные сенсорные с защитой костяшек кулака GHOST RACING ( мотоперчатки из натуральной кожи и сенсорными пальцами для мотоцикла, для чоппера, для эндуро) L Черные GR-ST05-1', 'sale'=> 2100, 'price'=>1500],
            ['count_status' => 2,'code' => '314908303', 'stars' => 4, 'category_id' => 1, 'vendor_id' => 1, 'img' => 'https://content2.rozetka.com.ua/goods/images/big/260636960.jpg', 'description' => 'Мотоперчатки кожаные сенсорные с защитой костяшек кулака GHOST RACING ( мотоперчатки из натуральной кожи и сенсорными пальцами для мотоцикла, для чоппера, для эндуро) L Черные GR-ST05-1', 'sale'=> 2100, 'price'=>1500],
            ['count_status' => 2,'code' => '314908303', 'stars' => 4, 'category_id' => 1, 'vendor_id' => 1, 'img' => 'https://content2.rozetka.com.ua/goods/images/big/260636960.jpg', 'description' => 'Мотоперчатки кожаные сенсорные с защитой костяшек кулака GHOST RACING ( мотоперчатки из натуральной кожи и сенсорными пальцами для мотоцикла, для чоппера, для эндуро) L Черные GR-ST05-1', 'sale'=> 2100, 'price'=>1500],
            ['count_status' => 2,'code' => '314908303', 'stars' => 4, 'category_id' => 1, 'vendor_id' => 1, 'img' => 'https://content2.rozetka.com.ua/goods/images/big/260636960.jpg', 'description' => 'Мотоперчатки кожаные сенсорные с защитой костяшек кулака GHOST RACING ( мотоперчатки из натуральной кожи и сенсорными пальцами для мотоцикла, для чоппера, для эндуро) L Черные GR-ST05-1', 'sale'=> 2100, 'price'=>1500],
            ['count_status' => 6,'code' => '8711000532904', 'stars' => 4.5, 'category_id' => 3, 'vendor_id' => 1, 'img' => 'https://content.rozetka.com.ua/goods/images/big/264064232.jpg', 'description' => 'Кофе растворимый Jacobs Cronat Gold 200 г (8711000532904)', 'sale'=>275, 'price'=>199],
            ['count_status' => 50,'code' => '3114908890', 'stars' => 2, 'category_id' => 5, 'vendor_id' => 2, 'img' => 'https://content.rozetka.com.ua/goods/images/preview/37406402.jpg', 'description' => 'Мобильный телефон Apple iPhone 11 128GB', 'sale'=>0, 'price'=>22999],
            ['count_status' => 2,'code' => '3114908880', 'stars' => 5, 'category_id' => 7, 'vendor_id' => 5, 'img' => 'https://content1.rozetka.com.ua/goods/images/preview/242978958.jpg', 'description' => 'Стиральный порошок Persil автомат Колор 8.1', 'sale'=>0, 'price'=>509],
            ['count_status' => 2,'code' => '51689234366', 'stars' => 4, 'category_id' => 2, 'vendor_id' => 3, 'img' => 'https://content2.rozetka.com.ua/goods/images/preview/4352559.jpg', 'description' => 'Упаковка кофе в зернах Ferarra Caffe 100%', 'sale'=>850, 'price'=>699],
            ['count_status' => 2,'code' => '9068778880', 'stars' => 5, 'category_id' => 5, 'vendor_id' => 4, 'img' => 'https://content1.rozetka.com.ua/goods/images/preview/166276939.jpg', 'description' => 'Мобильный телефон Samsung Galaxy A52', 'sale'=>15499, 'price'=>12999],
            ['count_status' => 2,'code' => '30930930180', 'stars' => 3, 'category_id' => 7, 'vendor_id' => 6, 'img' => 'https://content1.rozetka.com.ua/goods/images/preview/13218603.jpg', 'description' => 'Кабель Apple Lightning to USB 1 м (MXLY2ZM/A)', 'sale'=>0, 'price'=>899],
            ['count_status' => 2,'code' => '3000908880', 'stars' => 5, 'category_id' => 8, 'vendor_id' => 8, 'img' => 'https://content1.rozetka.com.ua/goods/images/preview/274335914.jpg', 'description' => 'Кубики для заморозки Kitchenio Вечный лед 12', 'sale'=>0, 'price'=>99],
//            ['code' => '', 'stars' =>0 , 'category_id' =>0 , 'vendor_id' =>0 , 'img' => '', 'description' => '', 'sale'=>0, 'price'=>0],


        ]);

    }
}
