<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function main(){
        $books = Book::latest()->take(6)->get();
        return view('User.main',[
            'books'=>$books
        ]);
    }

    public function products(){
        $categories = Category::all();
        $books = Book::paginate(9);
        return view('User.products',[
            'books'=>$books,
            'catigories'=>$categories,
        ]);
    }

    public function search(Request $request){


        $data = Book::where('title','like','%'.$request->search.'%')->paginate(9);
        $categories = Category::all();

        if ($request->search=='')
        {
            return redirect()->back();
        }

        return view('User.products',[
            'books'=>$data,
            'catigories'=>$categories,
        ]);
    }

    public function about(){
        return view('User.about');
    }

    public function contact(){
        return view('User.contact');
    }

    public function message(Request $request){

        $data = new Message();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->mavzu = $request->mavzu;
        $data->matn = $request->matn;

        $data->save();

        return redirect()->route('contact')->with('msg', 'Xabar Muvaffaqqiyatli Yuborildi');
    }


    public function product($id){
       $book = Book::find($id);
        return view('User.single',[
            'busy_id'=>1,
            'book'=>$book
        ]);
    }


    public function order(Request $request, $busy_id){
        $order  = new Order();
        $book = Book::find($request->book_id);

        if ($book->count <= $request->count || $book->count == 0){
            return redirect()->back()->withErrors('Siz so\'ragan miqdorda kitob mavjud emas. Bizda joriy vaqtda '.$book->count.' ta kitob mavjud');
        }
        $order->book_id = $request->book_id;
        $order->user_name = $request->user_name;
        $order->phone = $request->phone;
        $order->busy_id = $busy_id;
        $order->count = $request->count;

        $book->count = $book->count - $request->count;
        $book->save();

        $order->save();

        return redirect()->back()->with('msg', 'Buyurtma muvaffaqqiyatli qabul qilindi.  Tez orada siz bilan bog`lanamiz');
    }

}
