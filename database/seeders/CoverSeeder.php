<?php

namespace Database\Seeders;

use App\Models\Cover;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cover = Cover::create([
            'name' => 'Soft',
        ]);

        $cover = Cover::create([
            'name' => 'Hard',
        ]);
    }
}
