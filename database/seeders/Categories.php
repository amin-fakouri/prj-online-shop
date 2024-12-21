<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'cat_name' => 'موبایل'
        ]);

        DB::table('categories')->insert([
            'cat_name' => 'مد و پوشاک'
        ]);

        DB::table('categories')->insert([
            'cat_name' => 'لوازم خانگی'
        ]);

        DB::table('categories')->insert([
            'cat_name' => 'دیجیتال'
        ]);

        DB::table('users_products')->insert([
            'products_id' => 0,
            'users_id' => 0,
            'number_of_product' => 0,
            'price' => 0,
            'code_product' => 0
        ]);

        DB::table('profiles')->insert([
            'user_id' => 0,
            'pic_url' => 0,
            'user_name' => 0,
            'f_name' => 0,
            'l_name' => 0,
            'phone_number' => 0,
            'e_mail' => 0,
            'n_code' => 0,
        ]);
    }
}
