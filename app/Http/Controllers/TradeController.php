<?php

namespace App\Http\Controllers;

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
        $order->is_paid = 1;
        $order->save();
        return redirect()->back()->with('msg', 'Mahsulotga to`lov qilindi');
    }


}
