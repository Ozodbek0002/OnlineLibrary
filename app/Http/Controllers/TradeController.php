<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function sent($id)
    {
        $order = Order::find($id);
        $order->is_active = 0;
        $order->save();
        return redirect()->back()->with('msg', 'Mahsulot mijozga jo`natildi');
    }
     public function pay($id)
    {
        $order = Order::find($id);
        $book = Book::find($order->book_id);

        if ($order->is_active == 0){
            $order->is_paid = 1;
            if ($order->busy_id == 1) {
                $order->busy_id = 3;
                $book->count += $order->count;
            }

            $order->save();
            $book->save();
            return redirect()->back()->with('msg', 'Mahsulotga to`lov qilindi');
        }
        else
        {
            return redirect()->back()->withErrors( 'Mahsulot mijozga jo`natilmagan');
        }


    }


}
