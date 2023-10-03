<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $orders = Order::latest()->paginate(5);
        return view('Admin.orders.index', [
            'orders'=>$orders
        ]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $order = Order::find($id);
        $book = $order->book;
        if ($order->is_active==1){
            $book->count += $order->count;
            $book->save();
        }
        $order->delete();
        return redirect()->route('admin.clients')->with('msg','Xarid muvaffaqiyatli o`chirildi.');
    }
}
