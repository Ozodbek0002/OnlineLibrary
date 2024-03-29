<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $category = Category::create([
            'name' => 'Diniy',
        ]);

        $category = Category::create([
            'name' => 'Badiy',
        ]);

        $category = Category::create([
            'name' => 'Biznes',
        ]);

        $category = Category::create([
            'name' => 'Darslik',
        ]);

        $category = Category::create([
            'name' => 'Bolalar uchun',
        ]);

    }
}
