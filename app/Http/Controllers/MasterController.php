<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    public function home(Request $request){
        $books = DB::table('books')->select('books.id', 'books.title', 'books.author', 'books.image')->get();

        return view('home')->with(compact('books'));
    }

    public function category(Request $request){
        $id = $request->route('id');

        $category = DB::table('categories')->where('id', '=', $id)->first();
        $books = DB::table('books')->join('book__categories', 'books.id', '=', 'book__categories.book_id')
                                    ->where('book__categories.category_id', '=', $id)
                                    ->select('books.id', 'books.title', 'books.author', 'books.image')->get();

        return view('category')->with(compact('books', 'category'));
    }

    public function detail(Request $request){
        $id = $request->route('id');

        $book = DB::table('books')->where('id', '=', $id)->first();
        $publisher = DB::table('publishers')->where('id', '=', $book->publisher_id)->first();
        $synopsis = file_get_contents($book->synopsis);

        return view('detail')->with(compact('book', 'publisher', 'synopsis'));
    }

    public function publisherlist(){
        $publishers = DB::table('publishers')->get();

        return view('publisherlist')->with(compact('publishers'));
    }

    public function publisher(Request $request){
        $id = $request->route('id');

        $publisher = DB::table('publishers')->where('id', '=', $id)->first();
        $books = DB::table('books')->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                                    ->where('publishers.id', '=', $id)
                                    ->select('books.id', 'books.title', 'books.author', 'books.image')->get();

        return view('publisher')->with(compact('books', 'publisher'));
    }

    public function contact(){

        return view('contact');
    }
}
