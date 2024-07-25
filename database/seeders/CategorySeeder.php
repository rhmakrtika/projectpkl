<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = [
            ['name_category' => 'Food'],
            ['name_category' => 'Drink'],
        ];
        // masukkan data ke database
        DB::table('categories')->insert($categories);

    }
}
