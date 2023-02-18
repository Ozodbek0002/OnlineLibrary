<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
        $books = Book::paginate(2);
        return view('User.products',[
            'books'=>$books
        ]);
    }

    public function about(){
        return view('User.about');
    }

    public function contact(){
        return view('User.contact');
    }

}
