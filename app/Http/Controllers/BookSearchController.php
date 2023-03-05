<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookSearchController extends Controller
{
    public function search(Request $request)
    {
        $books = Book::where('title', 'like', '%' . $request->search . '%')->paginate(5);
        return view('admin.books.index', [
            'books'=>$books
        ]);

    }
}
