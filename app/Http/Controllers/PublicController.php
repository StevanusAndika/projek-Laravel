<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $books = null; // Initialize $books variable

        if ($request->category || $request->title) {
            $books = Book::where('title', 'like', '%' . $request->title . '%')
                    ->orwhereHas('categories', function ($query) use ($request) {
                        $query->where('categories.id', $request->category);
                    })->get();



        } else {
            $books = Book::all();
        }

        return view('book-list', ['books' => $books, 'categories' => $categories]);
    }
}
