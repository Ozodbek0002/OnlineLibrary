<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Message;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use mysql_xdevapi\Exception;

class RouteController extends Controller
{

    public function main(){
        $books = Book::all()
        ->where('count','>',0)
        ->sortByDesc('created_at')
        ->take(6);

        return view('User.main',[
            'books'=>$books
        ]);
    }

    public function products(){
        $categories = Category::all();
        $books = Book::where('count','>',0)
            ->OrderBy('created_at','desc')
            ->paginate(9);


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


        if ($book->count < $request->count || $book->count == 0){
            return redirect()->back()->withErrors('Siz so\'ragan miqdorda kitob mavjud emas. Bizda joriy vaqtda '.$book->count.' ta kitob mavjud');
        }

        $order->book_id = $request->book_id;
        $order->user_name = $request->user_name;
        $order->phone = $request->phone;
        $order->busy_id = $busy_id;
        $order->count = $request->count;


        if ($busy_id == 2) {
            $order->price = $book->price * $request->count;
        }else{
            $order->price = $book->price_daily * $request->count ;
        }

        $order->save();

        $book->count = $book->count - $request->count;
        $book->save();
        $matn="Yangi buyurtma mavjud 🔊 \n\n";

        if ($busy_id==2){
        $matn.="💸 Uslub: Sotib olish "." \n";
        }
         if ($busy_id==1){
        $matn.="💸 Uslub: Ijaraga olish "." \n";
        }

        $matn.="📕 Kitob nomi:".$book->title." \n";
        $matn.="🔄 Soni:".$request->count." \n";
        $matn.="🤑 Mijoz:".$request->user_name." \n";
        $matn.="📞 Telefon raqami:".$request->phone." \n\n\n";
        $matn.="🔊 Sayitga kirib buyurtmani jo'natish esdan chiqmasin 😉";

        try {

        Http::get("https://api.telegram.org/bot".env('TELEGRAM_BOT_API_TOKEN')."/sendMessage?chat_id=1366931310&text=$matn");

        }catch (Exception $e){
            $matn = "Buyurtma qabul qilishda xatolik bo`li iltimos saytdan tekshiring";
            Http::get("https://api.telegram.org/bot".env('TELEGRAM_BOT_API_TOKEN')."/sendMessage?chat_id=1366931310&text=$matn");
        }



        return redirect()->back()->with('msg', 'Buyurtma muvaffaqqiyatli qabul qilindi.  Tez orada siz bilan bog`lanamiz');

    }


    public function logout(){
        auth()->logout();
        return redirect()->route('/');
    }



}
