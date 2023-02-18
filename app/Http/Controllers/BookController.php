<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Cover;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{

    public function index(): Response
    {
        $books = Book::latest()->paginate(5);
        return response(view('admin.books.index', ['books'=>$books]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $categories = Category::all();
        $cover = Cover::all();
        return response(view('admin.books.create',[
            'categories' => $categories,
            'cover' => $cover,
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = new Book();

        $book = $request->validate([
            'title'=>'required',
            'author'=>'required',
            'image'=>'required',
            'category_id'=>'required',
            'cover_id'=>'required',
            'price'=>'required',
            'price_daily'=>'required',
            'page'=>'required',
            'count'=>'required',
        ],[
            'title.required'=>'Iltimos kitob tomini kiriting.',
            'author.required'=>'Iltimos kitob muallifini kiriting.',
            'image.required'=>'Iltimos rasm yuklang.',
            'price.required'=>'Iltimos kitob narxini yozing.',
            'price_daily.required'=>'Iltimos kitob kunlik narxini yozing.',
            'category_id.required'=>'Iltimos kitobni kategoriyasini tanlang .',
            'cover_id.required'=>'Iltimos kitobni sahifasi qadayligini tanlang.',
            'page.required'=>'Iltimos kitobni sahifa sonini yozing .',
            'count.required'=>'Iltimos kitobni sonini yozing.',
        ]);

        $data->title = $book['title'];
        $data->author = $book['author'];
        $data->category_id = $request->category_id;
        $data->cover_id = $request->cover_id;
        $data->price = $book['price'];
        $data->price_daily = $book['price_daily'];
        $data->page = $book['page'];
        $data->count = $book['count'];

        $imagename = $request->file('image')->getClientOriginalName();
        $request->image->move('books', $imagename);
        $data->image = $imagename;


        $data->save();

        return redirect()->route('admin.books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Book $book): Response
    {
//        $book = Book::find($id);

        $categpries = Category::all();
        $covers = Cover::all();
        return response(view('admin.books.edit',[
            'book' => $book,
            'categories'=>$categpries,
            'covers'=>$covers
        ]));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
