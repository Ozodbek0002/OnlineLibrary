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
        $months = [
            'Yan',
            'Fev',
            'Mar',
            'Apr',
            'May',
            'Iyun',
            'Iyul',
            'Avg',
            'Sen',
            'Okt',
            'Noy',
            'Dek',
        ];
        $rent_monthly = [];
        $sell_monthly = [];
        $rent_count = 0;

        for ($i=1; $i<=12; $i++){
           $rent_monthly[$i] = Order::whereMonth('created_at', $i)->where('busy_id',2)->sum('count');
        }
        for ($i=1; $i<=12; $i++){
            $sell_monthly[$i] = Order::whereMonth('created_at', $i)->where('busy_id',1)->sum('count');
        }

        $rent_monthly = array_values($rent_monthly);
        $sell_monthly = array_values($sell_monthly);



        return view('admin.dashboard',[
            'sell_books_count'=>$sell_books_count,
            'reading_books_count'=>$reading_books_count,
            'books_price'=>$books_price,
            'books_count'=>$books_count,
            'all_books_count'=>$all_books_count,
            'months'=>$months,
            'rent_monthly'=>$rent_monthly,
            'sell_monthly'=>$sell_monthly,
        ]);
    }
}
