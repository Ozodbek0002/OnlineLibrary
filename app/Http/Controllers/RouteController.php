<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
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

    public function about(){
        return view('User.about');
    }

    public function contact(){
        return view('User.contact');
    }

}
