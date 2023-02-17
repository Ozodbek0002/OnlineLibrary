<?php

namespace Database\Seeders;

use App\Models\Busy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $busy = Busy::create([
            'name' => 'Reading',
        ]);

        $busy = Busy::create([
            'name' => 'Sell',
        ]);
    }
}
