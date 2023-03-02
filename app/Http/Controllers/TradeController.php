<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function sent($id)
    {
        $order = Order::find($id);
        $order->is_paid = 1;
        $order->save();
        return redirect()->route('admin.orders.index');
    }
}
