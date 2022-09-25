<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table user_profiles');
        DB::table('user_profiles')->insert([
            ['user_id' => 1, 'balance' => 100, 'premium' => 1, 'firstname' => 'Павел', 'lastname' => 'Ярмолаев',   'gender'=>1, 'patronymic'=>'Григорье', 'date' => '1998-12-01' ,'language' => 1],
            ['user_id' => 2, 'balance' => 200, 'premium' => 0, 'firstname' => 'Саша', 'lastname' => 'Салипа',      'gender'=>1, 'patronymic'=>'', 'date' =>'2000-02-06' ,'language' => 1],
            ['user_id' => 3, 'balance' => 300, 'premium' => 1, 'firstname' => 'Маша', 'lastname' => 'Стародурова', 'gender'=>0, 'patronymic'=>'Степановна', 'date' => '1987-05-08' ,'language' => 1],
            ['user_id' => 4, 'balance' => 400, 'premium' => 0, 'firstname' => 'Ольга', 'lastname' => 'Цыбульская', 'gender'=>0, 'patronymic'=>'', 'date' => '1987-05-08','language' => 2],
            ['user_id' => 5, 'balance' => 500, 'premium' => 0, 'firstname' => 'Гриша', 'lastname' => 'Бульба',     'gender'=>1, 'patronymic'=>'', 'date' => '1987-05-08','language' => 2],
//lastname


        ]);
    }
}
