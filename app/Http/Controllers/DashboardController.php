<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $sell_books_count  = Order::where('busy_id',2)->sum('count');
//        dd($sell_books_count);
        $reading_books_count = Order::where('busy_id',1)->sum('count');
        $books_price = Order::where('is_paid',1)->sum('price');
        $books_count = Book::all()->count();
        $all_books_count = Book::all()->sum('count');

        $rent_monthly = [];
        $sell_monthly = [];
        $all_books_monthly = [];

        for ($i=1; $i<=12; $i++){
           $rent_monthly[$i] = Order::whereMonth('created_at', $i)->where('busy_id',2)->sum('count');
           $all_books_monthly[$i] = Book::whereMonth('created_at', $i)->sum('count');
        }
        for ($i=1; $i<=12; $i++){
            $sell_monthly[$i] = Order::whereMonth('created_at', $i)->where('busy_id',1)->sum('count');
        }

        $rent_monthly = array_values($rent_monthly);
        $sell_monthly = array_values($sell_monthly);
        $all_books_monthly = array_values($all_books_monthly);



        return view('Admin.dashboard',[
            'sell_books_count'=>$sell_books_count ?? 0,
            'reading_books_count'=>$reading_books_count ?? 0,
            'books_price'=>$books_price ?? 0,
            'books_count'=>$books_count ?? 0,
            'all_books_count'=>$all_books_count ?? 0,
            'rent_monthly'=>$rent_monthly ?? 0,
            'sell_monthly'=>$sell_monthly ?? 0,
            'all_books_monthly'=>$all_books_monthly ?? 0,
        ]);
    }
}
