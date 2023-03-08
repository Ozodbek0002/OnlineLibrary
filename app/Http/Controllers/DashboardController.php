<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $sell_books_count  = Order::where('busy_id',1)->sum('count');
        $reading_books_count = Order::where('busy_id',2)->sum('count');
        $books_price = Order::where('is_paid',1)->sum('price');
        $books_count = Book::all()->count();
        $all_books_count = Book::all()->sum('count');

        return view('admin.dashboard',[
            'sell_books_count'=>$sell_books_count,
            'reading_books_count'=>$reading_books_count,
            'books_price'=>$books_price,
            'books_count'=>$books_count,
            'all_books_count'=>$all_books_count,
        ]);
    }
}
