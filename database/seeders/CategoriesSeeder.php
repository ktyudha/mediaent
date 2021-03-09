<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            ['name' => 'Lifestyle'],
            ['name' => 'Hiburan'],
            ['name' => 'Teknologi'],
        );
    }
}
