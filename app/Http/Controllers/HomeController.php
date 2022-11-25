<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home(Request $request){
        $books = DB::table('books')->get();
        return view('home')->with(compact('books'));
    }

    public function category(Request $request){
        $id = $request->route('id');

        $category = DB::table('categories')->where('id', '=', $id)->first();
        $books = DB::table('books')->join('book__categories', 'books.id', '=', 'book__categories.book_id')
                                    ->where('book__categories.category_id', '=', $id)->get();

        return view('category')->with(compact('books', 'category'));
    }

    public function detail(Request $request){
        $id = $request->route('id');

        $book = DB::table('books')->where('id', '=', $id)->first();
        $publisher = DB::table('publishers')->where('id', '=', $book->publisher_id)->first();
        $synopsis = file_get_contents($book->synopsis);
        return view('detail')->with(compact('book', 'publisher', 'synopsis'));
    }
}
