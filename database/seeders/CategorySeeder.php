<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'iPhone'],
            ['id' => 2, 'name' => 'MacBook'],
            ['id' => 3, 'name' => 'iPad'],
            ['id' => 4, 'name' => 'Apple Watch'],
            ['id' => 5, 'name' => 'AirPods'],
            ['id' => 6, 'name' => 'Apple TV'],
            ['id' => 7, 'name' => 'Phụ kiện'],
        ];

        DB::table('categories')->insert($categories);
    }
}
