<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Cover;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{

    public function index(): Response
    {
        $books = Book::latest()->paginate(5);
        return response(view('admin.books.index', ['books'=>$books]));
    }


    public function create(): Response
    {
        $categories = Category::all();
        $cover = Cover::all();
        return response(view('admin.books.create',[
            'categories' => $categories,
            'cover' => $cover,
        ]));
    }


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


    public function show(string $id): Response
    {
        //
    }

    public function edit( Book $book): Response
    {

        $categpries = Category::all();
        $covers = Cover::all();
        return response(view('admin.books.edit',[
            'book' => $book,
            'categories'=>$categpries,
            'covers'=>$covers
        ]));


    }

    public function update(Request $request, Book $book): RedirectResponse
    {
        $book->title = $request->title;
        $book->author = $request->author;
        $book->category_id = $request->category_id;
        $book->cover_id = $request->cover_id;
        $book->price = $request->price;
        $book->price_daily = $request->price_daily;
        $book->page = $request->page;
        $book->page = $request->page;

        if ($request->image != null) {

            $image_path = public_path("books/{$book->image}");

            if (Book::exists($image_path)) {
                File::delete($image_path);
            }

            $imagename = $request->file('image')->getClientOriginalName();
            $request->image->move('books', $imagename);
            $book->image = $imagename;
        };


        $book->save();
        return redirect()->route('admin.books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('admin.books');
    }
}
