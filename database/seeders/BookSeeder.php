<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $book = Book::create([
            'title' => 'The Lord of the Rings',
            'author' => 'J. R. R. Tolkien',
            'price' => 20,
            'image' => null,
            'price_daily' => 2,
            'page' => 1216,
            'count' => 10,
            'sell_count' => 0,
            'category_id' => 1,
            'cover_id' => 1,

        ]);
    }
}
