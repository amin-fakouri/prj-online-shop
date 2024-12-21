<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feature extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            'fe_name' => 'رنگ'
        ]);

        DB::table('features')->insert([
            'fe_name' => 'طول'
        ]);

        DB::table('features')->insert([
            'fe_name' => 'عرض'
        ]);

        DB::table('features')->insert([
            'fe_name' => 'رم'
        ]);

        DB::table('features')->insert([
            'fe_name' => 'وزن'
        ]);

        DB::table('features')->insert([
            'fe_name' => 'حافظه'
        ]);
    }
}
