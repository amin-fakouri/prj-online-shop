<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            'sub_name' => 'Samsung'
        ]);

        DB::table('sub_categories')->insert([
            'sub_name' => 'TV'
        ]);

        DB::table('sub_categories')->insert([
            'sub_name' => 'لباس ورزشی'
        ]);

        DB::table('sub_categories')->insert([
            'sub_name' => 'ساعت مچی'
        ]);

        DB::table('users')->insert([
            'phone_number' => '09050954118',
            'password' => Hash::make(12345678),
            'role_code' => 2
        ]);

        DB::table('users')->insert([
            'phone_number' => '09050954117',
            'password' => Hash::make(12345678),
            'role_code' => 3
        ]);
    }
}
