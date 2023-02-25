<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Message;
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

        return redirect()->route('contact')->with('message', 'Xabar Muvaffaqqiyatli Yuborildi');
    }


    public function product($id){
       $book = Book::find($id);
        return view('User.single',[
            'busy_id'=>1,
            'book'=>$book
        ]);
    }

    public function rent($id){
        $book = Book::find($id);
        return view('User.single',[
            'busy_id'=>2,
            'book'=>$book
        ]);
    }

}
