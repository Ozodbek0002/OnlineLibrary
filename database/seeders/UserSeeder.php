<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Zafarbek',
            'email' => 'zafarkurbonboev8@gmail.com',
            'password' => Hash::make('Zafarbek1999'),
        ]);

    }
}
