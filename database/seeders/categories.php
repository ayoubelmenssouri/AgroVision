<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'label_categories'=>'grains'
        ]);
        DB::table('categories')->insert([
            'label_categories'=>'herbecides'
        ]);
        DB::table('categories')->insert([
            'label_categories'=>'phosphates'
        ]);
    }
}
